<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp']; 
    $pesan = $_POST['pesan'];

    $simpan = mysqli_query($koneksi, "insert into bukutamu value ('$nama', '$email', '$no_hp', '$pesan')");

    if ($simpan) {
        echo "<script> alert ('Data Berhasil Disimpan')</script>";
        header("refresh:0;buku_tamu.php");
    } else {
        echo "<script> alert ('Data Gagal Disimpan')</script>";
        header("refresh:0;buku_tamu.php");
    }
?>