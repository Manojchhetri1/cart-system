<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        $cat = Category::all();
        return view('order.index',compact('cat'));
    }
}
