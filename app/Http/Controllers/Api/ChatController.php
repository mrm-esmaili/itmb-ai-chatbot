<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\RetrievalService;
use App\Services\AIService;
use App\Services\PromptBuilder;
use App\Services\MemoryService;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $question = $request->input('question');
        $sessionId = $request->input('session_id', 'default');

        $retrieval = new RetrievalService();
        $ai = new AIService();
        $promptBuilder = new PromptBuilder();
        $memory = new MemoryService();

        $memory->addMessage($sessionId, 'user', $question);

        $context = $retrieval->getRelevantContext($question);

        $history = $memory->getSession($sessionId);

        $prompt = $promptBuilder->build($question, $context, $history);

        $answer = $ai->ask($question, $prompt);

        $memory->addMessage($sessionId, 'assistant', $answer);

        return response()->json([
            'prompt' => $prompt,
            'answer' => $answer
        ]);
    }
}
