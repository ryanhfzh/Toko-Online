<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categories;
use Illuminate\Support\Facades\DB;
class KategoriController extends Controller
{
    public function produkByKategori($id)
    {
        $kat = DB::table('categories')
        ->join('products','products.categories_id','=','categories.id')
        ->select(DB::raw('count(products.categories_id) as jumlah, categories.*'))
        ->groupBy('categories.id')
        ->get();

       //menampilkan data sesua kategori yang diminta user
        $data = array(
            'produks' => Product::where('categories_id',$id)->paginate(9),
            'categories' => Categories::findOrFail($id),
            'sideCat' => $kat
        );
        // dd($kat);    
        return view('user.kategori',$data);
    }
}
