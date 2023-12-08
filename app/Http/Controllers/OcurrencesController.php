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

    public function store(Request $request) {

        $ocurrence = new Ocurrence;

        $ocurrence->type = $request->type;
        $ocurrence->description = $request->description;
        $ocurrence->adress = $request->adress;
        $ocurrence->risk = $request->risk;

        $ocurrence->save();

        return redirect('/ocurrences/myocurrences')->with('ocurrence', $ocurrence);

    }
}