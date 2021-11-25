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

        $data = [
        ];

        return view('web.kretekCollection.kretek',$data);
    }

    public function detail($slug){

        $data = [
        ];

        return view('web.kretekCollection.detail',$data);
    }

}
