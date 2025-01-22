<?php $__env->startSection('content'); ?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .total-bg {
            background-color: #f1f8e9;
            font-weight: bold;
            text-align: center;
        }
        .day-cell {
            min-width: 50px;
            text-align: center;
            cursor: pointer;
        }
        .select-green {
            background-color: #d4edda;
        }
        .select-red {
            background-color: #f8d7da;
        }
        .table td {
            text-align: center;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .table-responsive {
            margin-top: 20px;
        }
        .header-select {
            margin-bottom: 20px;
        }
    </style>

    <script>
        function fetchBookingDates() {
            const month = document.getElementById('month-select').value;
            const year = new Date().getFullYear();
            const daysInMonth = new Date(year, monthIndex(month) + 1, 0).getDate();
            const dates = [];
            for (let i = 1; i <= daysInMonth; i++) {
                dates.push(`${year}-${monthIndex(month) + 1}-${i < 10 ? '0' + i : i}`);
            }
            return dates;
        }

        function monthIndex(month) {
            return {
                'January': 0,
                'February': 1,
                'March': 2,
                'April': 3,
                'May': 4,
                'June': 5,
                'July': 6,
                'August': 7,
                'September': 8,
                'October': 9,
                'November': 10,
                'December': 11
            }[month];
        }

        function generateDivTable() {
            const bookingDates = fetchBookingDates();
            const divHeader = document.getElementById('div-header');
            const divBody = document.getElementById('div-body');

            // Buat header
            let headerContent = `<tr class="table-secondary"><th colspan="3" class="text-center">Tersedia Standar</th>`;
            bookingDates.forEach((_, index) => {
                headerContent += `<th class="availability-count text-center" id="availability-count-standar-${index}">10</th>`;
            });

            headerContent += `</tr><tr class="table-secondary"><th colspan="3" class="text-center">Tersedia Family</th>`;
            bookingDates.forEach((_, index) => {
                headerContent += `<th class="availability-count text-center" id="availability-count-family-${index}">7</th>`;
            });

            headerContent += `</tr><tr class="table-secondary">
                    <th>No</th>
                    <th>Jenis</th>
                    <th>Nama Kamar</th>`;

            bookingDates.forEach((date, index) => {
                const day = new Date(date).getDate();
                headerContent += `<th class="day-cell text-center">${day}</th>`;
            });

            headerContent += `</tr>`;
            divHeader.innerHTML = headerContent;

            // Buat body
            let bodyContent = '';
            for (let i = 1; i <= 17; i++) {
                bodyContent += `
                    <tr>
                        <td>${i}</td>
                        <td>${i <= 10 ? 'Standar' : 'Family'}</td>
                        <td>${i <= 10 ? 100 + i : 'UP' + (i - 10)}</td>`;

                bookingDates.forEach(() => {
                    bodyContent += `
                        <td>
                            <select class="form-select select-green" onchange="updateColor(this); updateAvailability();">
                                <option value="1" selected>1</option>
                                <option value="0">0</option>
                            </select>
                        </td>`;
                });
                bodyContent += `</tr>`;
            }

            divBody.innerHTML = bodyContent;
            updateTotalAvailable(); // Inisialisasi total available saat pertama kali halaman dimuat
        }

        function updateColor(selectElement) {
            const value = parseInt(selectElement.value, 10);

            if (value === 1) {
                selectElement.classList.remove("select-red");
                selectElement.classList.add("select-green");
            } else {
                selectElement.classList.remove("select-green");
                selectElement.classList.add("select-red");
            }

            updateAvailability();
        }

        function updateAvailability() {
            const rows = document.querySelectorAll('#div-body tr');

            // Buat array untuk menghitung jumlah Standar dan Family per hari
            const countsStandar = Array.from({ length: rows[0].children.length - 3 }, () => 0);
            const countsFamily = Array.from({ length: rows[0].children.length - 3 }, () => 0);

            // Loop untuk setiap baris
            rows.forEach(row => {
                const selects = row.querySelectorAll('select');
                const roomType = row.children[1].innerText; // Dapatkan tipe kamar dari kolom ke-2

                // Loop untuk setiap elemen <select> yang ada di setiap baris
                selects.forEach((select, index) => {
                    if (select.value === '1') {
                        if (roomType === 'Standar') {
                            countsStandar[index]++; // Tambahkan jumlah Standar yang tersedia pada hari yang bersesuaian
                        } else if (roomType === 'Family') {
                            countsFamily[index]++; // Tambahkan jumlah Family yang tersedia pada hari yang bersesuaian
                        }
                    }
                });
            });

            // Update jumlah Standar tersedia di header
            countsStandar.forEach((count, index) => {
                document.getElementById(`availability-count-standar-${index}`).innerText = count;
            });

            // Update jumlah Family tersedia di header
            countsFamily.forEach((count, index) => {
                document.getElementById(`availability-count-family-${index}`).innerText = count;
            });

            updateTotalAvailable(); // Update total keseluruhan
        }

        function updateTotalAvailable() {
            const rows = document.querySelectorAll('#div-body tr');
            let overallTotalAvailableStandar = 0;
            let overallTotalAvailableFamily = 0;

            rows.forEach(row => {
                const selects = row.querySelectorAll('select');
                const roomType = row.children[1].innerText; // Get room type
                selects.forEach(select => {
                    if (select.value === '1') {
                        if (roomType === 'Standar') {
                            overallTotalAvailableStandar++;
                        } else if (roomType === 'Family') {
                            overallTotalAvailableFamily++;
                        }
                    }
                });
            });

            // Update total tersedia Standar di bagian atas
            document.getElementById('total-available-standar').innerText = `Tersedia Standar: ${overallTotalAvailableStandar}`;
            // Update total tersedia Family di bagian atas
            document.getElementById('total-available-family').innerText = `Tersedia Family: ${overallTotalAvailableFamily}`;
        }

        function submitForm() {
            const rows = document.querySelectorAll('#div-body tr');
            const month = document.getElementById('month-select').value;
            const data = [];

            rows.forEach((row, rowIndex) => {
                const selects = row.querySelectorAll('select');
                const roomType = row.children[1].innerText;
                const roomName = row.children[2].innerText;

                selects.forEach((select, dayIndex) => {
                    const available = select.value;
                    data.push({
                        room_type: roomType,
                        room_name: roomName,
                        available: available,
                        date: fetchBookingDates()[dayIndex]
                    });
                });
            });

            // Kirim data ke server
            fetch("<?php echo e(route('admin.monitoring.store')); ?>", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-Token": "<?php echo e(csrf_token()); ?>",
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                if (response.ok) {
                    alert("Data berhasil disimpan!");
                    location.reload();
                } else {
                    alert("Terjadi kesalahan saat menyimpan data.");
                }
            });
        }
        
        document.addEventListener('DOMContentLoaded', () => {
            generateDivTable();
        });
    </script>
</head>

<body>
    <div class="container my-5">
        
        <div class="d-flex justify-content-center header-select">
            <select id="month-select" class="form-select w-auto" onchange="generateDivTable()">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered" id="table1">
                <thead id="div-header"></thead>
                <tbody id="div-body"></tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center my-4">
            <button class="btn btn-primary" onclick="submitForm()">Simpan</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Magang\vkita\Iklat\Warna-Udiklat\resources\views/admin/monitoring/index.blade.php ENDPATH**/ ?>