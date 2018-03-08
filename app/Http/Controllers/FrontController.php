<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use DB;

use App\Http\Requests;

class FrontController extends Controller
{
    function trangchu(){
        $cat = DB::table('categories')->select('cat_name')->get();
        $sub_cat = DB::table('categories')
        ->join('sub_category', 'categories.id', '=', 'sub_category.cat_id')
        ->select('sub_category.cat_id', 'sub_category.sub_name', 'categories.cat_name')->get();
        $pro_news = Product::where('new', '<>', 0)->get();
        $pro_dis = Product::where('discount', '<>', 0)->get();
        $pros = Product::where('discount', '<>', 54) -> get();
        return view('pages.trangchu')
            ->with('cat', $cat)
            ->with('sub_cat', $sub_cat)
            ->with('pro_news', $pro_news)
            ->with('pro_dis', $pro_dis)
            ->with('pros', $pros);
    }
}
