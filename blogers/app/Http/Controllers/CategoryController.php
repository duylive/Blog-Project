<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.list', compact('categories'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $categories = DB::table('categories')->where('name', 'LIKE', '%' . $keyword . '%')->get();
        return view('categories.list', compact('categories'));
    }
}
