<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Database\Connection;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(Dispatcher $connection)
    {
        $d = $connection;
        return view('welcome');
    }
}
