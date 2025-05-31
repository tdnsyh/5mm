<x-layout-admin>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="card">
        <div class="card-body">
            <h3 class="fw-semibold">{{ $title }}</h3>
            <div class="mt-3">
                <div class="row">
                    <!-- Kalender kiri -->
                    <div class="col-md-7">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <button id="prevMonth" class="btn btn-outline-primary btn-sm">&laquo; Sebelumnya</button>
                            <h5 id="monthYear"></h5>
                            <button id="nextMonth" class="btn btn-outline-primary btn-sm">Berikutnya &raquo;</button>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            @php
                                $dayNames = ['Ming', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];
                            @endphp
                            @foreach ($dayNames as $day)
                                <div class="text-center fw-bold border rounded py-1 flex-fill">{{ $day }}</div>
                            @endforeach
                        </div>

                        <div id="calendar" class="d-flex flex-wrap">
                            {{-- Kalender hari-hari akan di-render oleh JS --}}
                        </div>
                    </div>

                    <!-- Detail reservasi kanan -->
                    <div class="col-md-5">
                        <h4>Detail Reservasi</h4>
                        <div id="detail-info">
                            <p class="text-muted">Klik tanggal pada kalender untuk melihat detail reservasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Bootstrap based calendar day style */
        #calendar>div.calendar-day {
            border: 1px solid #dee2e6;
            /* bootstrap border color */
            padding: 10px;
            height: 90px;
            width: calc(100% / 7);
            box-sizing: border-box;
            position: relative;
            cursor: pointer;
            user-select: none;
        }

        #calendar>div.calendar-day.empty {
            cursor: default;
            background-color: #f8f9fa;
        }

        #calendar>div.calendar-day.selected {
            background-color: #cfe2ff;
            border-color: #0d6efd;
        }

        .badge-diterima {
            background-color: #0d6efd;
            /* bootstrap primary */
            color: white;
            font-size: 0.75rem;
            padding: 0.25em 0.5em;
            border-radius: 0.25rem;
            position: absolute;
            top: 5px;
            right: 5px;
        }

        .badge-selesai {
            background-color: #198754;
            /* bootstrap success */
            color: white;
            font-size: 0.75rem;
            padding: 0.25em 0.5em;
            border-radius: 0.25rem;
            position: absolute;
            top: 5px;
            right: 5px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const reservasiDates = @json($reservasiDates);
            const calendarDiv = document.getElementById('calendar');
            const detailInfo = document.getElementById('detail-info');
            const monthYearTitle = document.getElementById('monthYear');
            const prevBtn = document.getElementById('prevMonth');
            const nextBtn = document.getElementById('nextMonth');

            let year = new Date().getFullYear();
            let month = new Date().getMonth();

            function renderCalendar(year, month) {
                monthYearTitle.textContent = new Date(year, month).toLocaleString('id-ID', {
                    month: 'long',
                    year: 'numeric'
                });

                const firstDay = new Date(year, month, 1);
                const lastDay = new Date(year, month + 1, 0);
                const daysInMonth = lastDay.getDate();
                const startDay = firstDay.getDay();

                let html = '';

                for (let i = 0; i < startDay; i++) {
                    html += `<div class="calendar-day empty"></div>`;
                }

                for (let day = 1; day <= daysInMonth; day++) {
                    let dateStr = `${year}-${String(month+1).padStart(2,'0')}-${String(day).padStart(2,'0')}`;
                    let badge = '';
                    if (reservasiDates[dateStr]) {
                        switch (reservasiDates[dateStr]) {
                            case 'selesai':
                                badge = '<span class="badge bg-success">Selesai</span>';
                                break;
                            case 'diterima':
                                badge = '<span class="badge bg-primary">Diterima</span>';
                                break;
                            case 'menunggu':
                                badge = '<span class="badge bg-warning text-dark">Menunggu</span>';
                                break;
                            case 'ditolak':
                                badge = '<span class="badge bg-danger">Ditolak</span>';
                                break;
                            default:
                                badge = `<span class="badge bg-secondary">${reservasiDates[dateStr]}</span>`;
                        }
                    }

                    html += `
                <div class="calendar-day" data-date="${dateStr}">
                    <div class="date-number fw-bold">${day}</div>
                    ${badge}
                </div>
            `;
                }
                calendarDiv.innerHTML = html;

                attachClickEvents();
            }

            function attachClickEvents() {
                const dayElements = calendarDiv.querySelectorAll('.calendar-day[data-date]');
                dayElements.forEach(el => {
                    el.addEventListener('click', function() {
                        dayElements.forEach(e => e.classList.remove('selected'));
                        this.classList.add('selected');

                        const date = this.getAttribute('data-date');
                        detailInfo.innerHTML =
                            `<p>Memuat data untuk tanggal <strong>${date}</strong>...</p>`;

                        fetch(`/admin/jadwal/data?date=${date}`)
                            .then(res => res.json())
                            .then(data => {
                                if (data.length === 0) {
                                    detailInfo.innerHTML =
                                        `<p>Tidak ada reservasi pada tanggal <strong>${date}</strong>.</p>`;
                                } else {
                                    let content =
                                        `<h5>Reservasi pada ${date}</h5><ul class="list-group">`;
                                    data.forEach(item => {
                                        content += `
                                    <li class="list-group-item">
                                        <strong>Kode:</strong> ${item.kode_reservasi} <br>
                                        <strong>User:</strong> ${item.user_name} <br>
                                        <strong>Paket:</strong> ${item.paket_nama} <br>
                                        <strong>Status:</strong> ${item.status} <br>
                                        <strong>Status Pembayaran:</strong> ${item.status_pembayaran} <br>
                                        <strong>Total Harga:</strong> Rp ${parseFloat(item.total_harga).toLocaleString('id-ID', {minimumFractionDigits:2})}
                                    </li>`;
                                    });
                                    content += '</ul>';
                                    detailInfo.innerHTML = content;
                                }
                            })
                            .catch(() => {
                                detailInfo.innerHTML =
                                    `<p class="text-danger">Gagal memuat data.</p>`;
                            });
                    });
                });
            }

            prevBtn.addEventListener('click', () => {
                month--;
                if (month < 0) {
                    month = 11;
                    year--;
                }
                renderCalendar(year, month);
            });

            nextBtn.addEventListener('click', () => {
                month++;
                if (month > 11) {
                    month = 0;
                    year++;
                }
                renderCalendar(year, month);
            });

            // Render awal
            renderCalendar(year, month);
        });
    </script>
</x-layout-admin>
