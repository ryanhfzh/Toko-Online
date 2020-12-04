<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PelangganController extends Controller
{
    public function index()
    {
        //ambil data pelanggan yang di join dengan table alamat, city,dan province
        $data = array(
            'pelanggan' => DB::table('users')
                          ->leftjoin('alamat','alamat.user_id','=','users.id')
                        ->leftjoin('cities','cities.city_id','=','alamat.cities_id')
                        ->leftjoin('provinces','provinces.province_id','=','cities.province_id')
                        ->select('users.*','alamat.detail','cities.title as kota','provinces.title as prov')
                        ->where('users.role','=','customer')->get()
        );
        return view('admin.pelanggan.index',$data);
    }
}
