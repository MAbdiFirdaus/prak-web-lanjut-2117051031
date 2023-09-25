<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\KelasModel;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $KelasModel = new KelasModel();

        $KelasModel->save([
            'nama_kelas'=> 'A'
        ]);
        $KelasModel->save([
            'nama_kelas'=> 'B'
        ]);
        $KelasModel->save([
            'nama_kelas'=> 'C'
        ]);
        $KelasModel->save([
            'nama_kelas'=> 'D'
        ]);
    }
}
