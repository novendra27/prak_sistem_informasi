<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Form Data Mahasiswa</h2>
        <form method="POST" action="<?= site_url('home/simpanmhs') ?>">
            <input type="text" name="nim_mhs" placeholder="nim" required>
            <br>
            <input type="text" name="nama_mhs" placeholder="nama" required>
            <br>
            <select name="jurusan_mhs">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Arsitektur">Teknik Arsitektur</option>
            </select>
            <br>
            <input type="text" name="alamat_mhs" placeholder="alamat" required>
            <br><br>
            <button type="submit">Simpan Data</button>
            &nbsp;
            <a href="<?= site_url('home/viewmhs') ?>">Lihat Data</a>
        </form>
    </center>
</body>

</html>