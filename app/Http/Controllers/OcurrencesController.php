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
    public function myocurrences()
{
    $ocurrences = Ocurrence::all();
    return view('ocurrences.myocurrences', ['ocurrences' => $ocurrences]);
}
    

    public function store(Request $request) {

        $ocurrence = new Ocurrence;

        $ocurrence->type = $request->type;
        $ocurrence->description = $request->description;
        $ocurrence->adress = $request->adress;
        $ocurrence->risk = $request->risk;

        
    
        // IMAGE UPLOAD

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName =md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/ocurrences'), $imageName);

            $ocurrence->image = $imageName;

        }

        $ocurrence->save();

        return redirect('/ocurrences/myocurrences')->with('msg', 'Ocorrência criada com sucesso!');

    }

    public function show($id) {
        $ocurrence = Ocurrence::findOrFail($id);
    
        return view('ocurrences.show', ['ocurrence' => $ocurrence]);
    }
 
    public function scheduling() {
        return view('ocurrences.scheduling');
    }

    public function news() {
        return view('ocurrences.news');
    }
    public function called() {
        return view('ocurrences.called');
    }
}