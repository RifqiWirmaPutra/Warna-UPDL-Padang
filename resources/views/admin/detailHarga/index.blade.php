<!DOCTYPE html>
<html>

<head>
    <title>Detail Harga</title>
</head>

<body>
    <h1>Daftar Detail Harga</h1>
    <a href="{{ route('admin.detailHarga.create') }}">Tambah Detail Harga</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Harga Monthly</th>
                <th>Harga Daily</th>
                <th>Non Daily</th>
                <th>Non Monthly</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detailhargas as $detailharga)
                <tr>
                    <td>{{ $detailharga->id }}</td>
                    <td>{{ $detailharga->hargaMonthly }}</td>
                    <td>{{ $detailharga->hargaDaily }}</td>
                    <td>{{ $detailharga->nonDaily }}</td>
                    <td>{{ $detailharga->nonMonthly }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
