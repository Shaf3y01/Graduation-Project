<?php

namespace App\Http\Controllers\Admin;

use index;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('admin.index');
    } 
}
