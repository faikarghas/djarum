<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InspirationController extends Controller
{
    public function index(){

        $data = [
        ];

        return view('web.inspiration.index',$data);
    }

    public function detail($slug){

        $detailInspiration = DB::table('inspiration')->where('slug',$slug)->get();


        $data = [
            'detailInspiration' => $detailInspiration
        ];

        return view('web.inspiration.detail',$data);
    }

}
