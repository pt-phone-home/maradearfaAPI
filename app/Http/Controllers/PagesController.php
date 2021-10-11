<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phrase;

class PagesController extends Controller
{
    public function index() {
        $phrases = Phrase::all();
        $oneRandomPhrase = Phrase::all()->random();
        $phraseCount = Phrase::all()->count();
        $fiveRandomPhrases = Phrase::all()->random(5);
        $twentyRandomPhrasesInEnglish = Phrase::all()->random(20)->pluck('english');
        

        return view('index')->with(['phraseCount' => $phraseCount, 'oneRandomPhrase' => $oneRandomPhrase, 'fiveRandomPhrases' => $fiveRandomPhrases, 'twentyRandomPhrasesInEnglish' => $twentyRandomPhrasesInEnglish]);
    }
}
