<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phrase;

class PhraseController extends Controller
{
    public function index() {
        return Phrase::all();
    }

    public function searchbyenglish(Request $request) {
        // $terms = preg_split('/\s+/', $request['search'], -1, PREG_SPLIT_NO_EMPTY); 
        // $numberOfTerms = count($terms);
        // return $terms;
        $term = $request['search'];
      
        return Phrase::where('english','like', $term .' %')
                    ->orWhere('english', 'like', '% ' . $term)
                    ->orWhere('english', 'like', '% ' . $term . ' %')
                    ->orWhere('english', 'like', $term)
                    ->get();
        
    }
    public function searchbyirish(Request $request) {
        $term = $request['term'];
        return Phrase::where('irish','like', $term .' %')
                    ->orWhere('irish', 'like', '% ' . $term)
                    ->orWhere('irish', 'like', '% ' . $term . ' %')
                    ->orWhere('irish', 'like', $term)
                    ->get();
    }
}
