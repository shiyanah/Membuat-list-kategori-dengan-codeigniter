<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('layout/sidebar');
        echo view('content/data');
        echo view('layout/footer');
    }

    public function hello($name = null)
    {
        $data['nama'] = $name;
        $data['title'] = "Judul halaman";
        return view('front', $data);
    }

    public function produk()
    {
        $data = [
            'title' => 'Produk'
        ];
        echo view('layout/header', $data);
        echo view('layout/sidebar');
        echo view('content/produk');
        echo view('layout/footer');
    }

    public function kategori($id = null)
    {
        $data = [
            'kat' => [
                'Alat Tulis',
                'Pakaian',
                'Minuman',
                'Elektronik',
                'Snack'
            ],
        ];
        $meta = ['title' => 'Kategori'];
        if (!is_null($id)) {
            echo $data['kat'][$id];
        } else {
            echo view('layout/header', $meta);
            echo view('layout/sidebar');
            echo view('content/kategori', $data);
            echo view('layout/footer');
        }
    }
    public function password()
    {
        echo view('Views/hash');
    }
    public function profile()
    {
        echo view('layout/profile');
    }
    public function faq()
    {
        echo view('layout/faq');
    }
}
