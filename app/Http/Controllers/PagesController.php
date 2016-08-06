<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Petition;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function admin() {
        $petitions = Petition::all()->where('active',1);

        return view('admin.index', compact('petitions'));
    }

    public function login() {
        return view('admin.login');
    }
}
