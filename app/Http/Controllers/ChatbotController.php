<?php

namespace App\Http\Controllers;

use App\NLP\NLPManager;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function query(Request $request)
    {
        $request->validate([
            'texto' => 'required|string|min:1'
        ]);

        $query = $request->input('texto');

        $nlp = new NLPManager();
        return response()->json($nlp->analyze($query));
    }
}
