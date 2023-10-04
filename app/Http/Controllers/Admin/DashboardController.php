<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function  index()
    {
        $name = 'hamad adel';
        $age = 30;
        // dd(compact('name', 'age')); ['name'=>'hamad adel', 'age'=30]
        return view('admin.dashboard');
    }
}
