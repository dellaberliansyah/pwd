<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP | Tambah Data Identitas</title>
</head>

<body>
    <header>
        <h3>Tambah Identitas</h3>
</header>
<form action ="proses_tambah.php" method="POST">
    <fieldset>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
</p>
<p>
    <label for="alamat">Alamat: </lable>
    <textarea name="alamat"></textarea>
</p>
<p>
    <label for="no_telpn">Nomor HP: </lable>
    <textarea name="no_telpn"></textarea>
</p>
<p>
    <label for="jk">Jenis Kelamin: </lable>
    <label><input type="radio" name="jk" value="laki-laki"> Laki-laki</label>
    <label><input type="radio" name="jk" value="perempuan"> perempuan</label>
</p>
<p>
    <label for="kodepos">Kodepos: </lable>
    <input type="text" name="kodepos" placeholder="kodepos" />
</p>
<p>
    <input type="submit" value="Daftar" name="daftar"/>
</p>

</fieldset>
</body>
