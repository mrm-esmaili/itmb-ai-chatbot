<?php

namespace App\Services;

class PromptBuilder
{
    public function build(string $question, string $context, array $memory): string
    {
        $history = "";

        foreach ($memory as $msg) {
            $history .= $msg['role'] . ": " . $msg['content'] . "\n";
        }

        return "
You are ITMB AI assistant.

RULES:
- Only answer based on provided context
- If info is missing say you don't know
- Be concise and professional

CONTEXT:
{$context}

CHAT HISTORY:
{$history}

QUESTION:
{$question}
";
    }
}
