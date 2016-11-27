<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $this->authorize('show-product');
    }

    public function create()
    {
        $this->authorize('create-product');

    }
}
