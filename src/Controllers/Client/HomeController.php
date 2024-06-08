<?php

namespace Admin\PhpWeb3014\Controllers\Client;

use Admin\PhpWeb3014\Commons\Controller;
use Admin\PhpWeb3014\Commons\Helper;
use Admin\PhpWeb3014\Models\User;

class HomeController extends Controller
{
    public function index()
    {        
        $name = "KIEN";
        $this->renderViewClient('home', [
            'name' => $name,
        ]);
    }
}
