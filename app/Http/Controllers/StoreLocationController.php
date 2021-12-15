<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreLocationController extends Controller
{
    public function index(){

        $storeData = DB::table('store_location')->get();

        $listCity = DB::table('store_location')->select(DB::raw('DISTINCT city'))->get();
        $listStoreName = DB::table('store_location')->select(DB::raw('DISTINCT store_name'))->get();

        $data = [
            'storeData' => $storeData,
            'listCity' => $listCity,
            'listStoreName' => $listStoreName
        ];


        return view('web.store.index',$data);
    }

    public function getStoreNameByCity($city){

        $storeData = DB::table('store_location')
        ->where('city',$city)
        ->select(DB::raw('DISTINCT store_name'))->get();

        $data = [
            'storeData' => $storeData,
        ];


        return response()->json([
            'respond' => 'success',
            'data' => $storeData
        ]);
    }

    public function getStoreLocation($city,$store_name){


        $storeData = DB::table('store_location')
        ->where(['city'=>$city,'store_name'=>$store_name])
        ->get();

        $data = [
            'storeData' => $storeData,
        ];


        return response()->json([
            'respond' => 'success',
            'data' => $storeData
        ]);
    }

    public function getStoreLocationByCity($city){


        $storeData = DB::table('store_location')
        ->where(['city'=>$city])
        ->get();

        $data = [
            'storeData' => $storeData,
        ];


        return response()->json([
            'respond' => 'success',
            'data' => $storeData
        ]);
    }

}

