<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InspirationController extends Controller
{
    public function index(){
        $listInspiration = DB::table('inspiration')->limit(3)->get();
        $listInspirationSkip1 = DB::table('inspiration')->skip(1)->take(3)->get();
        $listInspirationSkip3 = DB::table('inspiration')->skip(3)->take(6)->get();


        $data = [
            'listInspiration' => $listInspiration,
            'listInspirationSkip1' => $listInspirationSkip1,
            'listInspirationSkip3' => $listInspirationSkip3,

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
