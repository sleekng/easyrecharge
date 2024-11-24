<?php

namespace App\Http\Controllers\Auth\VTU;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AirtimeTopUpController extends Controller
{
    public function index(){

        return Inertia::render('VTU/AirtimeTopUp');
    }
}
