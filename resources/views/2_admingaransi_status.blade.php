<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

            <table>
                <thead>
                    <tr>
                    <td>
                        id Barang
                    </td>
                    <td>
                        jenis Barang
                    </td>
                    <td>
                        merk Barang
                    </td>
                    <td>
                        status
                    </td>

                    <td>
                        tanggal pengajuan
                    </td>
                    <td>
                        aksi
                    </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($komplain as $nampil)
                    <tr>
                        <td>
                            {{ $nampil->Barang->id }}
                        </td>
                        <td>
                            {{ $nampil->Barang->jenis_barang }}
                        </td>
                        <td>
                            {{ $nampil->Barang->merk_barang }}
                        </td>
                        <td>
                            {{ $nampil->Barang->status }}
                        </td>
                        <td>
                            {{ $nampil->Barang->created_at }}
                        </td>
                        <td>
                            <a href="{{route ('edit', ['id' => $nampil -> id ])}} ">ubah</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

</body>
</html>
