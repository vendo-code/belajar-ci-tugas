<?php

namespace App\Controllers;

use App\Models\ProdukCategoryModel; 

class ProdukCategoryController extends BaseController
{
    protected $kategori;

    function __construct()
    {
        $this->kategori = new ProdukCategoryModel();
    }

    public function index()
    {
        $data['kategori'] = $this->kategori->findAll(); // Ambil data kategori
        return view('v_ProdukCategory', $data);
    }

    public function create()
    {
        $dataForm = [
            'nama' => $this->request->getPost('nama'),
        ];

        $this->kategori->insert($dataForm);
        return redirect('ProdukCategory')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit($id)
    {
          $dataProduk = $this->kategori->find($id);

        $dataForm = [
            'nama' => $this->request->getPost('nama'),
            'updated_at' => date("Y-m-d H:i:s")
        ];

        $this->kategori->update($id, $dataForm);
        return redirect()->to('/ProdukCategory')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $this->kategori->delete($id);
        return redirect('ProdukCategory')->with('success', 'Data Berhasil Dihapus');
    }
}