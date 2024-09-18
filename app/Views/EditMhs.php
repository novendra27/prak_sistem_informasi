<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Form Edit Data Mahasiswa</h2>
        <?php
        $no = 0;
        foreach ($dataMhs as $row):
            $no++;
        ?>
            <form action="/home/editmhs/<?= $row->id_mhs; ?>" method="POST">
                <input type="hidden" class="form-control" name="idMhs" value="<?= $row->id_mhs; ?>">
                <label>NIM</label>
                <input type="text" class="form-control" name="nimMhs" value="<?= $row->nim; ?>">
                <br>
                <label>Nama mahasiswa</label>
                <input type="text" class="form-control" name="namaMhs" value="<?= $row->nama; ?>">
                <br>
                <label>Jurusan</label>
                <select name="jurusanMhs">
                    <option><?= $row->jurusan; ?></option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                </select>
                <br>
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamatMhs" value="<?= $row->alamat; ?>">
                <br><br>
                <button type="submit">Simpan Data</button>
            </form>
        <?php endforeach; ?>
    </center>
</body>

</html>