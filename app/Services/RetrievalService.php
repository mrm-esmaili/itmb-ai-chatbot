<?php

namespace App\Services;

class RetrievalService
{
    public function getRelevantContext(string $question): string
    {
        $files = glob(storage_path('app/docs/*.md'));

        $scores = [];

        foreach ($files as $file) {
            $content = file_get_contents($file);

            similar_text(strtolower($question), strtolower($content), $percent);

            $scores[$file] = $percent;
        }

        arsort($scores);

        $topFiles = array_slice(array_keys($scores), 0, 2);

        $context = '';

        foreach ($topFiles as $file) {
            $context .= file_get_contents($file) . "\n\n";
        }

        return $context;
    }
}
