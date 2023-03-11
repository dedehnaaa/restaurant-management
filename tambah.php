
<?php

if (isset($_POST["tambah"])) {

    $tambah = menu ();

    echo $tambah > 0

        ? "<script>

        alert('Data berhasil ditambah!');

        location.href = 'index.php';

    </script>"

        : "<script>

        alert('Data gagal ditambah!');

        location.href = 'index.php';

    </script>";

}

function menu()

{

    global $koneksi;



    $nama = htmlspecialchars($_POST["nama"]);

    $harga = (int) htmlspecialchars($_POST["harga"]);

    $gambar = htmlspecialchars($_FILES["gambar"]["name"]);

    $kategori = htmlspecialchars($_POST["kategori"]);

    $status = htmlspecialchars($_POST["status"]);



    // Generate Kode Menu


}

function ambil_data($query)

{

    global $koneksi;



    $db = [];

    $sql_query = mysqli_query($koneksi, $query);

    while ($q = mysqli_fetch_assoc($sql_query)) {

        array_push($db, $q);
    }

    return $db;
}



?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Tambah Data</title>

</head>



<body>

    <div class="container">

        <h1>Tambah Menu </h1>

        <a class="btn btn-success fw-bold" href="index.php">Kembali</a>

        <form action="tambah.php" method="POST" enctype="multipart/form-data">

            <div class="table-responsive-md my-3">

                <table class="table">

                    <tr>

                        <td><label for="nama">Nama Makanan</label></td>

                        <td>:</td>

                        <td><input autocomplete="off" type="text" name="nama" id="nama" required></td>

                    </tr>

                    <tr>

                        <td><label for="harga">Harga</label></td>

                        <td>:</td>

                        <td><input min="0" type="number" name="harga" id="harga" required></td>

                    </tr>

                    <tr>

                        <td><label for="gambar">Gambar</label></td>

                        <td>:</td>

                        <td>

                            <input type="file" name="gambar" accept="image/*" required>

                        </td>

                    </tr>

                    <tr>

                        <td><label for="kategori">Kategori</label></td>

                        <td>:</td>

                        <td>

                            <select name="kategori" id="kategori">

                                <option selected value="Makanan">Makanan</option>

                                <option value="Fast Food">Fast Food</option>

                                <option value="Snack">Snack</option>

                                <option value="Dessert">Dessert</option>

                                <option value="Minuman">Minuman</option>

                            </select>

                        </td>

                    </tr>

                    <tr>

                        <td><label for="status">Status</label></td>

                        <td>:</td>

                        <td>

                            <label for="tersedia"><input type="radio" name="status" id="tersedia" value="tersedia" checked>Tersedia</label>

                            <label for="tidak-tersedia"><input type="radio" name="status" id="tidak-tersedia" value="tidak tersedia">Tidak Tersedia</label>

                        </td>

                    </tr>

                    <tr>

                        <td></td>

                        <td></td>

                        <td><button class="btn btn-primary" name="tambah">Tambah</button></td>

                    </tr>

                </table>

            </div>

        </form>

    </div>

    <script src="assets/js/bootstrap.min.js"></script>

</body>



</html>