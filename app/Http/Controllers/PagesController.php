<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phrase;

class PagesController extends Controller
{
    public function index() {
        $phrases = Phrase::all();

        return view('index')->with(['phrases' => $phrases]);
    }
}
