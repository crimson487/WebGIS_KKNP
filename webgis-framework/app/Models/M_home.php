<?php
namespace App\Models;

use CodeIgniter\Model;

class M_home extends Model
{
    protected $table = 'tbl_kra_desa';
    protected $primaryKey = 'id';

    // Method baru get_data()
    public function get_data()
    {
        // Contoh 1: Menggunakan query builder model
        return $this->findAll();

        // Contoh 2: Query manual
        // return $this->db->table($this->table)
        //     ->where('id', 1)
        //     ->get()
        //     ->getRowArray();
    }
}