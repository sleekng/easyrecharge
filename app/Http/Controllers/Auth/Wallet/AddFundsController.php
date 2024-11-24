<?php

namespace App\Http\Controllers\Auth\Wallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AddFundsController extends Controller
{
    public function index(){

        return Inertia::render('Wallet/AddFunds');
    }
}
