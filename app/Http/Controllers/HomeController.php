<?php

namespace App\Http\Controllers;
use App\Models\table1;
use App\Models\table2;
use App\Models\table3;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function join()
    {
        $users = DB::table('users')
        ->join('table2s', 'users.id', '=', 'table2s.user_id')
        ->join('table3s', 'users.id', '=', 'table3s.user_id')
        ->select('table3s.email')
        ->get();
        return $users;
    }
}