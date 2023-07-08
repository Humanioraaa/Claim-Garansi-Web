<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf

        <input id="id_barang" name="id_barang" type="text" value="{{ $barang->id }}" readonly>
        <input type="text" value="{{ $barang->jenis_barang}}" readonly>
        <input type="text" value="{{ $barang->merk_barang}}" readonly>




        <select name="id_user" id="id_user">
            @foreach ($users as $admin )

            <option value="{{ $admin->id }}">{{ $admin->name }}</option>

            @endforeach
        </select>

        <button type="submit">Submits</button>
    </form>
</body>
</html>
