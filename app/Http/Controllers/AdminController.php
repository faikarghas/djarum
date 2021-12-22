<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SubsidiariesModel;
use App\Models\AboutModel;
use App\Models\ContactInfoModel;
use App\Models\CareerModel;

class AdminController extends Controller
{
    public function __construct() { $this->middleware('preventBackHistory'); $this->middleware('auth'); }

    public function index(){
        return view('admin.views.home');
    }
}
