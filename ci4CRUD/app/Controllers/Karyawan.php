<?php

namespace App\Controllers;

use App\Models\Karyawan_model;

class Karyawan extends BaseController
{
    public function index(): void
    {
        $model = new Karyawan_model();
        $data['title'] = 'Data Karyawan';
        $data['karyawan'] = $model->getKaryawan();
        echo view('templates/header', $data);
        echo view('home_view', $data);
        echo view('templates/footer', $data);
    }

    public function tambah(): void
    {
        $data['title'] = 'Tambah Data Karyawan';
        echo view('templates/header', $data);
        echo view('tambah_view', $data);
        echo view('templates/footer', $data);
    }

    public function tambah_proses()
    {
        $model = new Karyawan_model();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'no_telp' => $this->request->getPost('no_telp'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'golongan' => $this->request->getPost('golongan')
        ];
        $model->saveKaryawan($data);
        return redirect()->to(base_url());
    }

    public function edit($id)
    {
        $model = new Karyawan_model();
        $karyawan = $model->getKaryawan($id)->getRow();
        if (isset($karyawan)) {
            $data['karyawan'] = $karyawan;
            $data['title'] = 'Edit ' . $karyawan->nama;
            echo view('templates/header', $data);
            echo view('edit_view', $data);
            echo view('templates/footer', $data);
        } else {
            echo '<script>
            alert("Data tidak ditemukan!");
            window.location.href="' . base_url() . '";
            </script>';
        }
    }

    public function edit_proses()
    {
        $model = new Karyawan_model();
        $id = $this->request->getPost('id');
        $data = [
            'nama' => $this->request->getPost('nama'),
            'no_telp' => $this->request->getPost('no_telp'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'golongan' => $this->request->getPost('golongan')
        ];
        $model->editKaryawan($data, $id);
        return redirect()->to(base_url());
    }

    public function hapus($id)
    {
        $model = new Karyawan_model();
        $karyawan = $model->getKaryawan($id)->getRow();
        if (isset($karyawan)) {
            $model->deleteKaryawan($id);
            return redirect()->to(base_url());
        } else {
            echo '<script>
            alert("Data tidak ditemukan!");
            window.location.href="' . base_url() . '";
            </script>';
        }
    }
}
