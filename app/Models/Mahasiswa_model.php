<?php
namespace App\Models;
use CodeIgniter\Model;

class Mahasiswa_model extends Model
{
    protected $table = 'tbl_mahasiswa';

    // function __construct()
    // {
    //     $this->db = db_connect();
    // }

    public function saveMhs($tabel, $data)
    {
        $this->db->table($tabel)->insert($data);
        return true;
    }

    public function tampildata()
    {
        $dataquery = $this->db->query("SELECT * FROM tbl_mahasiswa");
        return $dataquery->getResult();
    }

    public function getMhs($id)
    {
        $dataquery = $this->db->query("SELECT * FROM tbl_mahasiswa WHERE id_mhs=".$id);
        return $dataquery->getResult();
    }

    public function prosesEditMhs($table, $data, $where)
    {
        $this->db->table($table)->update($data, $where);
        return true;
    }

    public function hapusMhs($id)
    {
        $dataquery = $this->db->query("DELETE FROM tbl_mahasiswa WHERE id_mhs=".$id);
        return true;
    }
}
?>  