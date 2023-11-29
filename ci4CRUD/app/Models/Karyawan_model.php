<?php

namespace App\Models;

use CodeIgniter\Model;

class Karyawan_model extends Model
{
  protected $table = 'karyawan';
  protected $primaryKey = 'id';
  protected $allowedFields = ['nama', 'no_telp', 'tgl_lahir', 'golongan'];

  public function getKaryawan($id = false)
  {
    if ($id == false) {
      return $this->findAll();
    }
    return $this->getWhere(['id' => $id]);
  }

  public function saveKaryawan($data)
  {
    $query = $this->db->table($this->table)->insert($data);
    return $query;
  }

  public function editKaryawan($data, $id)
  {
    $query = $this->db->table($this->table)->update($data, array('id' => $id));
    return $query;
  }

  public function deleteKaryawan($id)
  {
    $query = $this->db->table($this->table)->delete(array('id' => $id));
    return $query;
  }
}
