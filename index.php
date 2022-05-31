<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - tampilkan data Indentitas</title>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: red;}
</style>
</head>

<body>
    <a href="tambah.php">+ TAMBAH IDENTITAS</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NOMOR IDENTITAS</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NOMOR HP</th>
            <th>JENIS KELAMIN</th>
            <th>KODE POS</th>
            <th>AKSI</th>
</tr>
<?php
include 'connect.php';
$no = 1;
$data = mysqli_query($db, "SELECT * FROM identitas");
while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['no_identitas']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['no_telpn']; ?></td>
        <td><?php echo $d['jk']; ?></td>
        <td><?php echo $d['kodepos']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $d['no_identitas']; ?>">EDIT</a>
            <a href="hapus.php?id=<?php echo $d['no_identitas']; ?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
</body>

</html>