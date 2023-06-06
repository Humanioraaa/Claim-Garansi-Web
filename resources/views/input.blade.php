<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="mb-3">
<form>
<label for="merk">merk:</label><br>
  <input type="text" id="merk" name="merk"><br>
  <label for="jenis_barang">jenis_barang:</label><br>
  <input type="text" id="jenis_barang" name="jenis_barang"><br>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="integer" name="harga" class="form-control" id="harga" required>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                            <input type="text" name="jumlah_barang" class="form-control" id="jumlah_barang" required>
                        </div>
                    
                        <label for="tanggal_beli">tanggal_beli:</label>
                        <input type="date" id="tanggal_beli" name="tanggal_beli"> <br>
                        
                        <label for="masa_garansi">masa_garansi:</label>
                        <input type="date" id="masa_garansi" name="masa_garansi">
                        
                        <div>
                            <div>
                                <button>submit</button>
                            </div>
                        </div>
                    </form>
</body>
</html>
                        