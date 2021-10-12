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
        $twentyRandomPhrasesInEnglish = Phrase::all()->random(20);
        

        return view('index')->with(['phraseCount' => $phraseCount, 'oneRandomPhrase' => $oneRandomPhrase, 'fiveRandomPhrases' => $fiveRandomPhrases, 'twentyRandomPhrasesInEnglish' => $twentyRandomPhrasesInEnglish]);
    }

    public function english_search(Request $request) {
       $searchTerm = $request['englishSearch'];
       $locatedPhrases = Phrase::where('english','like', $searchTerm .' %')
                    ->orWhere('english', 'like', '% ' . $searchTerm)
                    ->orWhere('english', 'like', '% ' . $searchTerm . ' %')
                    ->orWhere('english', 'like', $searchTerm)
                    ->get();

        $oneRandomPhrase = Phrase::all()->random();
        $phraseCount = Phrase::all()->count();
        $fiveRandomPhrases = Phrase::all()->random(5);
        $twentyRandomPhrasesInEnglish = Phrase::all()->random(20);
        return view('english_search')->with(['locatedPhrases' => $locatedPhrases, 'phraseCount' => $phraseCount, 'oneRandomPhrase' => $oneRandomPhrase, 'fiveRandomPhrases' => $fiveRandomPhrases, 'twentyRandomPhrasesInEnglish' => $twentyRandomPhrasesInEnglish]);
    }

    public function show($id) {
         $oneRandomPhrase = Phrase::all()->random();
         $phraseCount = Phrase::all()->count();
         $fiveRandomPhrases = Phrase::all()->random(5);
         $twentyRandomPhrasesInEnglish = Phrase::all()->random(20);

        $phrase = Phrase::findOrFail($id);
        
        return view('show')->with(['phrase' => $phrase, 'phraseCount' => $phraseCount, 'oneRandomPhrase' => $oneRandomPhrase, 'fiveRandomPhrases' => $fiveRandomPhrases, 'twentyRandomPhrasesInEnglish' => $twentyRandomPhrasesInEnglish]);
    }
}
