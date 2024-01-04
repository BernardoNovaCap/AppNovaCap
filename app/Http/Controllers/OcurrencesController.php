<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ocurrence;
use App\Models\User;

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

        $user = auth()->user();
        $ocurrence->user_id = $user->id;

        $ocurrence->save();

        return redirect('/ocurrences/myocurrences')->with('msg', 'Ocorrência criada com sucesso!');

    }

    public function show($id) {
        $ocurrence = Ocurrence::findOrFail($id);

        $ocurrenceOwner = User::where('id', $ocurrence->user_id)->first()->toArray();
    
        return view('ocurrences.show', ['ocurrence' => $ocurrence, 'ocurrenceOwner' => $ocurrenceOwner]);
    }

    public function dashboard() {

        $user = auth()->user();
        $ocurrences = $user->ocurrences;

        return view('ocurrences.myocurrences', ['ocurrences' => $ocurrences]);
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