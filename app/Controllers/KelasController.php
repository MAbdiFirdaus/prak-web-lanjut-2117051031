<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;

class KelasController extends BaseController
{
    public $kelasModel;

    public function __construct()
    {
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'List Kelas',
            'kelas' => $this->kelasModel->getKelas(),
        ];
        return view('list_kelas', $data);
    }

    public function create(){

        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create Kelas',
            'kelas' => $kelas,
            'validation' => \Config\Services::validation()
        ];

        return view('create_kelas',$data);
    }

    public function store()
    {
        if (!$this->validate([
            'nama_kelas' => [
                'rules' => 'required|is_unique[kelas.nama_kelas]',
                'errors' => [
                    'required' => '{field} mahasiswa harus di isi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('/kelas/create'))->withInput()->with('validation', $validation);
        }

        $this->kelasModel->saveKelas([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ]);
       
        return redirect()->to(base_url('/kelas'));
    }

    public function edit($id){

        $kelas = $this->kelasModel->getKelas($id);

        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $kelas,
        ];

        return view ('edit_kelas', $data);
    }

    public function update($id){
        

        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas')
        ];
    

        $result = $this->kelasModel->updatekelas($data, $id);

        if(!$result){
            return redirect()->back()->withInput()
                ->with('error', 'Gagal menyimpan data' );
        }

        return redirect()->to(base_url('/kelas'));
    }

    public function destroy($id)
    {
        try {
            $this->kelasModel->deleteKelas($id);
            return redirect()->to(base_url('/kelas'));
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            log_message('error', 'Database error: ' . $e->getMessage());
            $validation = service('validation');
            $validation->setError('delete_failed', 'Gagal menghapus data, foreign key terpakai di user');
            return redirect()->back()->with('validation', $validation);
        }
    }
    

}
