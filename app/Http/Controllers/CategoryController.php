<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('main.welcome', compact('categories'));
    }

    public function distribution($id)
    {
        $galaxies =Category::find($id)->SpObjects;
        return view('main.Galaxy', compact('galaxies'));
    }
}
