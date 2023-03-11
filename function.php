<?php

$koneksi = mysqli_connect("localhost", "root", "", "restoran");

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
?>

