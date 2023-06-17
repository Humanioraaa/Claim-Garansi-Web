<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/barang" method="post">
        @csrf
        <label for="merk_barang">Merk:</label>
        <input type="text" id="merk_barang" name="merk_barang"><br><br>
        
        <label for="jenis_barang">Jenis:</label>
        <input type="text" id="jenis_barang" name="jenis_barang"><br><br>

        <label for="harga_barang">Harga:</label>
        <input type="number" id="harga_barang" name="harga_barang"><br><br>
         
        <label for="jumlah_barang">Jumlah:</label>
        <input type="number" id="jumlah_barang" name="jumlah_barang"><br><br>

        <label for="tanggal_beli_barang">Tanggal Beli:</label>
        <input type="date" id="tanggal_beli_barang" name="tanggal_beli_barang" value="2023-03-21"><br><br>

        <label for="masa_garansi_barang">Masa Garansi:</label>
        <input type="text" id="masa_garansi_barang" name="masa_garansi_barang"><br><br>

        <input type="hidden" name="user_id" value="{{ $users->id }}">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
