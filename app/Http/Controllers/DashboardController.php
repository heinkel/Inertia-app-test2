<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'fname' => 'Lara',
            'lname' => 5+5,
        ];
        return Inertia::render('Dashboard/Index',$data);
    }
}
