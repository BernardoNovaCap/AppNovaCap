<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ocurrences;

class OcurrencesController extends Controller
{
    public function index() {

        $events = "";

        return view('welcome');
    }

    public function create() {
        return view('ocurrences.create');
    }

    public function myocurrences() {
        return view('ocurrences.myocurrences');
    }
}