<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\RetrievalService;
use App\Services\AIService;
use App\Services\PromptBuilder;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $question = $request->input('question');

        $retrieval = new RetrievalService();
        $ai = new AIService();
        $promptBuilder = new PromptBuilder();

        $context = $retrieval->getRelevantContext($question);

        $prompt = $promptBuilder->build($question, $context);

        $answer = $ai->ask($question, $prompt);

        return response()->json([
            'prompt' => $prompt,
            'answer' => $answer
        ]);
    }
}
