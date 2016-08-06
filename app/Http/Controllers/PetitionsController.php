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

    public function edit(Petition $petition) {
        $signatures = $petition->signatures();
        $fields = $petition->fields();
        $assets = $peitions->assets();

        return view('petitions.edit', compact('petition', 'signatures', 'fields', 'assets'));
    }

    public function update(Request $request, Petition $petition) {
        $petition->update($request->all());

        return back();
    }

    public function storeSignature(Request $request, Petition $petition) {

        $this->validate($request, [
            'firstname' =>  'required',
            'lastname'  =>  'required',
            'email'     =>  'required|email'
        ]);

       $petition->signatures()->create($request->all());

        return back();
    }
}
