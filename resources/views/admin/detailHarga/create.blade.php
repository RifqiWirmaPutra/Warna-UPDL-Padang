<!DOCTYPE html>
<html>

<head>
    <title>Tambah Detail Harga</title>
</head>

<body>
    <h1>Tambah Detail Harga</h1>

    @if ($errors->any())
        <div>
            <strong>Whoops!</strong> Ada kesalahan saat input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.detailHarga.store') }}" method="POST">
        @csrf
        <div>
            <label for="hargaMonthly">Harga Bulanan:</label>
            <input type="number" name="hargaMonthly" placeholder="Harga Bulanan">
        </div>
        <div>
            <label for="hargaDaily">Harga Harian:</label>
            <input type="number" name="hargaDaily" placeholder="Harga Harian">
        </div>
        <div>
            <label for="nonDaily">Non Daily:</label>
            <input type="number" name="nonDaily" placeholder="Non Daily">
        </div>
        <div>
            <label for="nonMonthly">Non Monthly:</label>
            <input type="number" name="nonMonthly" placeholder="Non Monthly">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
