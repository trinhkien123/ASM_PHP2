<?php

namespace Admin\PhpWeb3014\Controllers\Client;

use Admin\PhpWeb3014\Commons\Controller;
use Admin\PhpWeb3014\Commons\Helper;
use Admin\PhpWeb3014\Models\Product;
use Admin\PhpWeb3014\Models\User;

class HomeController extends Controller
{
    private Product $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function index()
    {
        $products = $this->product->all();
        $this->renderViewClient('home', [
            'products' => $products
        ]);
    }
}
