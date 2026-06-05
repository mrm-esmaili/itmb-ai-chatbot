<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AIService
{
    public function ask(string $question, string $context)
    {
        $apiKey = config('services.arvan.key');
        $modelName = config('services.arvan.model');
        $endpoint = config('services.arvan.endpoint');

        $response = Http::withHeaders([
            'Authorization' => 'apikey ' . $apiKey,
            'Content-Type' => 'application/json',
        ])->post(
            rtrim($endpoint, '/') . '/chat/completions',
            [
                'model' => $modelName,
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'You are ITMB assistant. Answer only based on provided context.'
                    ],
                    [
                        'role' => 'user',
                        'content' => "Context:\n{$context}\n\nQuestion:\n{$question}"
                    ]
                ],
                'max_tokens' => 1000,
                'temperature' => 0.2
            ]
        );

        if (!$response->successful()) {
            dd([
                'status' => $response->status(),
                'headers' => $response->headers(),
                'body' => $response->body(),
            ]);
        }

        $data = $response->json();

        return $data['choices'][0]['message']['content']
            ?? json_encode($data);
    }
}
