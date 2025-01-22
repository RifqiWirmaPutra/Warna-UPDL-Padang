<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="pdfkit-orientation" content="landscape"> <!-- Menambahkan orientasi lanskap -->
    <meta name="pdfkit-width" content="420mm"> <!-- Menambahkan lebar kertas (misalnya, A4) -->
    <meta name="pdfkit-height" content="210mm"> <!-- Menambahkan orientasi kertas -->
    <title>WARNA - Rencana Realisasi Pembelajaran</title>
    
    <style>
        /* Gaya CSS untuk tampilan PDF */
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            font-size: 24px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 11px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 3px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Rencana Realisasi Pembelajaran</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Kode</th>
                <th>Judul</th>
                <th>Jenis Permintaan Diklat</th>
                <th>Jenis Pelaksanaan Diklat</th>
                <th>Angkatan</th>
                <th>Instruktur</th>
                <th>Rencana Peserta</th>
                <th>Realisasi Peserta</th>
                <th>Kelas</th>
                <th>Wisma</th>
                <th>Persiapan</th>
                <th>Pelaksanaan</th>
                <th>Pasca</th>
                <th>Realisasi Biaya</th>
                <!-- Tambahkan kolom lain sesuai dengan data ARP yang ingin ditampilkan -->
            </tr>
        </thead>
        <tbody>
            @foreach ($arp as $index => $data)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $data->tanggal_mulai }}</td>
                <td>{{ $data->tanggal_selesai }}</td>
                <td>{{ $data->kode }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->jenis_permintaan_diklat }}</td>
                <td>{{ $data->jenis_pelaksanaan_diklat }}</td>
                <td>{{ $data->angkatan }}</td>
                <td>{{ $data->instruktur }}</td>
                <td>
                    {{ $data->users->count() }}
                    {{ $data->confirmed_count }}
                </td>
                <td>{{ $data->hitungAbsensiCount() }}</td>
                <td>{{ $data->kelas }}</td>
                <td>{{ $data->wisma }}</td>
                <td>{{ $data->persentasePersiapan() }} %</td>
                <td>{{ $data->persentasePelaksanaan() }} %</td>
                <td>{{ $data->persentasePasca() }} %</td>
                <td>Rp. {{ number_format($data->totalRealisasiBiaya(), 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
