<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\FormModel;


class ContactController extends Controller
{
    public function index(){

        $data = [
        ];

        return view('web.contact.index',$data);
    }

    public function membership(){

        $data = [
        ];

        return view('web.membership.index',$data);
    }

    public function postContact(Request $request){
        $input = $request->all();

        $data = [
            'name' => $input['name'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'city' => isset($input['city']),
            'message' => isset($input['message']),
            'type' => $input['type'],
        ];

        FormModel::create($data);

        return response()->json([
            'respond' => 'success',
            'data' => $input
        ]);

    }

}

