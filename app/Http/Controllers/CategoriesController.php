<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use DB;
class CategoriesController extends Controller
{
    public function get_parent()
    {
        
        return view('index');
    }
}
