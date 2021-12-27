<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Google\Client;
use Revolution\Google\Sheets\Sheets;

use App\Models\StoreLocationModel;


class HomeController extends Controller
{
    public function index(){

        $storeData = DB::table('store_location')->get();

        $listCity = DB::table('store_location')->select(DB::raw('DISTINCT city'))->get();
        $listStoreName = DB::table('store_location')->select(DB::raw('DISTINCT store_name'))->get();
        $listInspiration = DB::table('inspiration')->limit(3)->get();


        $data = [
            'storeData' => $storeData,
            'listCity' => $listCity,
            'listStoreName' => $listStoreName,
            'listInspiration' => $listInspiration
        ];

        return view('web.home.index',$data);
    }

    public function updateStore(Request $request){

        $rows = Sheets::spreadsheet('16uKdOWsj1bosRpDyk3dwBfteZMBROT0aqzrkHXQT1p0')->sheet('Russia')->get();

        $header = $rows->pull(0);
        $values = Sheets::collection($header, $rows);
        $values->toArray();


        $data = collect();
        set_time_limit(0);
        foreach ($values as $key => $value) {
            StoreLocationModel::updateOrCreate(
                [
                    'id' => $value['No'],
                ],
                [
                    'city' => $value['City'],
                    'store_name' => $value['Store Name'],
                    'store_type' => $value['Email address'],
                    'address' => $value['Address'],
                    'coordinate' => $value['Coordinates'],
                ]
            );
        }


        return response()->json([
            'respond' => 'success',
            // 'data' => $values
        ]);
    }

}
