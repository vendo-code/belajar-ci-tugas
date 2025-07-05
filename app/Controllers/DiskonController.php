<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Diskon_model;

class DiskonController extends BaseController
{
    protected $diskonModel;

    public function __construct()
    {
        $this->diskonModel = new Diskon_model();
    }

    public function index()
    {
        $data['diskon'] = $this->diskonModel->findAll();
        return view('diskon/index', $data);
    }

    public function create()
    {
        return view('diskon/create');
    }

    public function store()
    {
        $tanggal = $this->request->getPost('tanggal');
        $nominal = $this->request->getPost('nominal');

        // Validasi: tanggal unik
        $existing = $this->diskonModel->where('tanggal', $tanggal)->first();
        if ($existing) {
            return redirect()->back()->with('error', 'Diskon untuk tanggal tersebut sudah ada!');
        }

        $this->diskonModel->save([
            'tanggal' => $tanggal,
            'nominal' => $nominal,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(base_url('admin/diskon'))->with('success', 'Diskon berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data['diskon'] = $this->diskonModel->find($id);
        return view('diskon/edit', $data);
    }

    public function update($id)
    {
        $nominal = $this->request->getPost('nominal');

        $this->diskonModel->update($id, [
            'nominal' => $nominal,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(base_url('admin/diskon'))->with('success', 'Diskon berhasil diupdate!');
    }

    public function delete($id)
    {
        $this->diskonModel->delete($id);
        return redirect()->to(base_url('admin/diskon'))->with('success', 'Diskon berhasil dihapus!');
    }
}