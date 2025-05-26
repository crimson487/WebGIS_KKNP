<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_home;

class Peta extends BaseController
{
    protected $M_home;

    public function __construct()
    {
        $this->M_home = new M_home(); // Inisialisasi model di constructor
    }

    public function petaTipologi()
    {
        $data = [
            'judul' => 'Peta Tipologi',
            'tipologi' => $this->M_home->get_data(), // 🔵 Akses method langsung dari model
            'page' => 'peta/v_peta_tipologi',
        ];
        return view('v_template', $data);
    }
}