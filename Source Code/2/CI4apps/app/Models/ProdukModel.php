<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{

    protected $table = 'produk';
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_produk', 'qty', 'harga', 'foto_produk'];
}
