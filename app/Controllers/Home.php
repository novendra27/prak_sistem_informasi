<?php

namespace App\Controllers;
use App\Models\Mahasiswa_model;

class Home extends BaseController
{
    public function index(): string
    {
        return view('input_mhs');
    }

    public function simpanmhs()
    {
        $nim = $this->request->getPost('nim_mhs');
        $nama = $this->request->getPost('nama_mhs');
        $jurusan = $this->request->getPost('jurusan_mhs');
        $alamat = $this->request->getPost('alamat_mhs');
        $data = [
            'nim' => $nim,
            'nama' => $nama,
            'jurusan' => $jurusan,
            'alamat' => $alamat,
        ];

        $mhs = new Mahasiswa_model();
        $tabelMhs="tbl_mahasiswa";
        $simpan = $mhs->saveMhs($tabelMhs, $data);
        return redirect()->to(site_url());
    }

    public function viewmhs()
    {
        $mhs = new Mahasiswa_model();
        $datamhs = $mhs->tampildata();
        $data = array('dataMhs' => $datamhs);
        echo View('Viewmhs', $data);
    }

    public function formeditmhs($id)
    {
        $mhs = new Mahasiswa_model();
        $datamhs = $mhs->getMhs($id);
        $data = array('dataMhs' => $datamhs);
        echo View('Editmhs', $data);
    }

    public function editmhs($id)
    {
        $id = $this->request->getPost('idMhs');
        $nim = $this->request->getPost('nimMhs');
        $nama = $this->request->getPost('namaMhs');
        $jurusan = $this->request->getPost('jurusanMhs');
        $alamat = $this->request->getPost('alamatMhs');
        $data = [
            'nim' => $nim,
            'nama' => $nama,
            'jurusan' => $jurusan,
            'alamat' => $alamat,
        ];

        $where = ['id_mhs' => $id];

        $mhs = new Mahasiswa_model();
        $tabelMhs="tbl_mahasiswa";
        $simpan = $mhs->prosesEditMhs($tabelMhs, $data, $where);
        return redirect()->to(site_url());
    }

    public function deletemhs($id)
    {
        $mhs = new Mahasiswa_model();
        $tabelMhs="tbl_mahasiswa";
        $hapus=$mhs->hapusmhs($id);
        return redirect()->to(site_url());
    }
}
