<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\RetrievalService;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $question = $request->input('question');

        $retrieval = new RetrievalService();

        $context = $retrieval->getRelevantContext($question);

        return response()->json([
            'question' => $question,
            'context' => $context
        ]);
    }
}
