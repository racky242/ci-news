<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\NewsModel;

class News extends BaseController
{
    public function news1()
    {
        $n = new NewsModel();
        $data['nw'] = $n->findAll();
        return view('templates/header')
        . view('news/index', $data)
        . view('templates/footer');
    }
}