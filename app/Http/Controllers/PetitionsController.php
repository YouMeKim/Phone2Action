<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Petition;

class PetitionsController extends Controller
{
    public function index() {
        $petitions = Petition::all();

        return view('petitions.index', compact('petitions'));
    }

    public function show(Petition $petition) {
        return view('petitions.show', compact('petition'));
    }
}
