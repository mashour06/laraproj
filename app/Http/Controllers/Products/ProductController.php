<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function showProduct($id) {
        return 'this is product id is ' . $id;
    }
}
