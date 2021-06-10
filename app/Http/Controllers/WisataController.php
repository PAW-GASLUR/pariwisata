<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataController extends Controller
{
    function index()
    {
        $users = DB::table('wisata')->orderby('created_at', 'desc')->get();
        return view('wisata', ['data' => $users]);
    }
}
