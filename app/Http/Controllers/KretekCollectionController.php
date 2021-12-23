<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KretekCollectionController extends Controller
{
    public function index(){

        $data = [
        ];

        return view('web.kretekCollection.index',$data);
    }

    public function kretek(){
        $listCigarette = DB::table('products')->where('category',1)->get();
        $listCigarillos = DB::table('products')->where('category',2)->get();
        $listShisha = DB::table('products')->where('category',3)->get();

        $data = [
            'listCigarette' => $listCigarette,
            'listCigarillos' => $listCigarillos,
            'listShisha' => $listShisha
        ];

        return view('web.kretekCollection.kretek',$data);
    }

    public function detail($slug){

        $listProducts = DB::table('products')->where('slug',$slug)->get();

        $data = [
            'listProducts' => $listProducts
        ];

        return view('web.kretekCollection.detail',$data);
    }

}
