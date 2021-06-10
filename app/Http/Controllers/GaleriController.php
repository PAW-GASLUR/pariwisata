<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    function index()
    {
        $users = DB::table('galeri')->orderby('created_at', 'desc')->get();
        return view('galeri', ['data' => $users]);
    }
}
