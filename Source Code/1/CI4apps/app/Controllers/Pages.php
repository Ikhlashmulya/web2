<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | e-catalog'
        ];
        //return view('pages/home', $data);
        return view('produk/index', $data);
    }

    public function kategori()
    {
        $data = [
            'title' => 'Katalog | e-catalog'
        ];
        return view('pages/kategori.php', $data);
    }
}
