<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

}

