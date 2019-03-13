<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class AdminController extends Controller
{
    public function index()
    {
        $tables = DB::select('SHOW TABLES');
        return view('layouts.admin', compact('tables'));
    }

    public function table($x = 'categories')
    {
        $tables = DB::select('SHOW TABLES');
        $oneTable = DB::table($x)->get()->toArray();
        $columns = Schema::getColumnListing($x);
        return(view('tables', compact('oneTable','tables', 'x', 'columns')));
    }

    public function send()
    {

    }
}
