<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Data Mahasiswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Mahasiswa</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header pt-4 bg-primary">
                        <h5>Form Data Mahasiswa</h5>
                    </div>
                    <form method="POST" action="<?= site_url('home/simpanmhs') ?>">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nim" class="form-label">Nim</label>
                                <input type="text" name="nim_mhs" class="form-control" id="nim" placeholder="Masukkan NIM Anda">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama_mhs" class="form-control" id="nama" placeholder="Masukkan Nama Anda">
                            </div>
                            <div class="mb-2">
                                <label for="jurusan" class="form-label">Jurusan</label>
                                <select name="jurusan_mhs" class="form-select" id="jurusan">
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                                </select>
                            </div>
                            <div class="mb-1">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat_mhs" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->