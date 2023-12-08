<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ocurrence;

class OcurrencesController extends Controller

{
    public function index() {

        $ocurrences = Ocurrence::all();

        return view('welcome', ['ocurrences' => $ocurrences]);
    }

    public function create() {
        return view('ocurrences.create');
    }

    public function myocurrences() {
        return view('ocurrences.myocurrences');
    }
}