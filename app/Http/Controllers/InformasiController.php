<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformasiController extends Controller
{
    function index()
    {
        $users = DB::table('informasi')->orderby('created_at', 'desc')->get();
        return view('informasi', ['data' => $users]);
    }
}
