<?php

namespace App\Http\Controllers\Auth\VTU;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ElectricityController extends Controller
{
    public function index(){

        return Inertia::render('VTU/Electricity');
    }
}
