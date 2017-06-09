<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class StoreController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	//dd($products);
    	return view('store.index', compact('products'));
    }

    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	//dd($product);

    	return view('store.show', compact('product'));
    }

    public function showCategory($category_id)
    {
        //$products = Product::where('slug', $category_id);
        $products = DB::select('select * from products where category_id = ?', [$category_id]);
        //dd($products);

        return view('store.showCategory', compact('products'));
    }

    public function showHelp()
    {
        return view('store.help');
    }

    public function showContact()
    {
        return view('store.contact');
    }

    public function showlicence()
    {
        return view('store.licencia');
    }
}
