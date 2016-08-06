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

    public function create() {
        $petition = new Petition;
        return view('admin.petitions.edit', compact('petition'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title'             =>  'required',
            'summary'           =>  'required',
            'body'              =>  'required',
            'thankyoumessage'   =>  'required',
            'public'            =>  'required',
            'active'            =>  'required'
        ]);

        $petition = new Petition($request->all());

        $petition->save();

        return redirect('admin');
    }

    public function edit(Petition $petition) {
        $petition->load('signatures')->load('fields')->load('assets');

        return view('admin.petitions.edit', compact('petition'));
    }

    public function update(Request $request, Petition $petition) {
        $petition->update($request->all());

        return back();
    }

    public function delete(Petition $petition) {
        $petition->delete();

        return redirect('admin');
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
