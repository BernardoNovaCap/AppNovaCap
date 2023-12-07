<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OcurrencesController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function create() {
        return view('ocurrences.create');
    }

    public function myocurrences() {
        return view('ocurrences.myocurrences');
    }
}
