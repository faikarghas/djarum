<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialsController extends Controller
{
    public function index(){

        $data = [
        ];

        return view('web.testimonials.index',$data);
    }

}
