<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\ValidationException;


class AdminController extends Controller
{
    public function index()
    {
        $tables = DB::select('SHOW TABLES');
        return view('layouts.admin', compact('tables'));
    }

    public function table($x)
    {
        $tables = DB::select('SHOW TABLES');
        $columns = Schema::getColumnListing($x);//список колонок
        $oneTable = DB::table($x)->get();//объект текущей таблицы
        switch ($x)
        {
            case 'categories' : return(view('admin.categories', compact('oneTable','tables', 'x', 'columns')));
                break;
            case 'sp_objects' : return(view('admin.sp_objects', compact('oneTable','tables', 'x', 'columns')));
                break;
            case 'users' : return(view('admin.sp_objects', compact('oneTable','tables', 'x', 'columns')));
                break;
        }
    }

    public function CategoriesSend(Request $request)
    {
        try
        {
            $this->validate($request, [
                'category_name' => 'required|string|min:3|max:30'
                    ]);
            $obj = new Category();
            $obj = $obj->create([
                'category_name' => $request->input('category_name')
            ]);
            if ($obj)
            {
                return back()->with('success', 'Category added successfully');
            }
            return back()->with('error', 'Error!!!Category is not added');
        }
        catch (ValidationException $e)
        {
            \Log::error($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }
}
