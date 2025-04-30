<?php

namespace App\Controllers;

use PhpParser\Builder\Function_;
use PhpParser\Node\Stmt\Return_;

class Home extends BaseController
{

    public function index()
    {
        return VIEW('v_home');
    }
    public function produk(): string
    {
        return view('v_produk');
    }


    public function detailKategori($kat)
    {
        echo "<h1>$kat</h1>";
    }
    public function grafik(): string
    {
        return view('v_grafik');
    }
    }

    
    

