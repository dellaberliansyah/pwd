<?php
include("connect.php");
if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telpn = $_POST['no_telpn'];
    $jk = $_POST['jk'];
    $kodepos = $_POST['kodepos'];

    mysqli_query($db, "INSERT INTO identitas VALUES
    ('','$nama', '$alamat', '$no_telpn', '$jk', '$kodepos')");
    //mengalihkan halaman kembali ke index.php
    header("location:index.php");
}