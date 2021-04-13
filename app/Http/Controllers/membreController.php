<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\Membres;
use Illuminate\Http\Request;

class membreController extends Controller
{
    public function index(){
        $membre = Membres::all();
        return view('home',compact('membre'));
    }
}
