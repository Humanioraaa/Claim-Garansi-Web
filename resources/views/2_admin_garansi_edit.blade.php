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
        <div class="col">
        <label for="status"> Ganti Status</label>
        <select name="status" id="status">
            <option value="diterima">Barang Diterima</option>
            <option value="onprogres">On Progres</option>
            <option value="gantibaru">Di Ganti Baru</option>
            <option value="selesai">Selesai Service</option>
            <option value="dikirim">Barang Dikirim</option>
        </select>
        <label for="tanggal_selesai">tanggal selesai</label>
        <input type="date" name="tanggal_selesai" id="tanggal_selesai">
        </div>
        <div class="col">
            <p>Merk : {{$komplain->Barang->merk_barang}}</p>
            <p>Jenis : {{$komplain->Barang->jenis_barang}}</p>
            <p>Status Saat Ini : {{$komplain->Barang->status}}</p>
        </div>

        <button href = "route('edit_submit')">Submit</button>
    </form>

</body>
</html>
