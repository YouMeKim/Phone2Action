<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Petition;
use App\Signature;

class PetitionsController extends Controller
{
    public function index() {
        $petitions = Petition::all()->where('public',1)->where('active',1);

        return view('petitions.index', compact('petitions'));
    }

    public function show(Petition $petition) {
        $signatures = $petition->signatures();
        return view('petitions.show', compact('petition', 'signatures'));
    }

    public function storeSignature(Request $request, Petition $petition) {

       $petition->signatures()->create($request->all());

        return back();
    }
}
