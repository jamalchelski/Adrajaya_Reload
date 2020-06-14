<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\product;
use App\contact;
class PagesController extends Controller
{
    public function landing()
    {
        return view('landing');
    }
    public function produk()
    {
        // $products = DB::table('products')->get(); +> menggunakan query builder
        
        $products = product::all(); // => mengguakan eloquent ORM 
        return view('produk', compact('products') );
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function kontak()
    {
        $contacts = contact::all();
        return view('kontak', compact('contacts'));
    }
    public function artikel()
    {
        return view('artikel');
    }
    public function pendaftaran()
    {
        return view('auth/register');
    }
    public function pesan()
    {
        //
    }
    public function store()
    {
        //
    }


}


