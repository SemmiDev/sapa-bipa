<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProofController extends Controller
{
    public function index()
    {
        return view('dashboard.proof.index');
    }
}
