<?php

namespace App\Services;

class MemoryService
{
    private string $path;

    public function __construct()
    {
        $this->path = storage_path('memory/sessions.json');
    }

    public function getSession(string $sessionId): array
    {
        if (!file_exists($this->path)) {
            return [];
        }

        $data = json_decode(file_get_contents($this->path), true);

        return $data[$sessionId] ?? [];
    }

    public function addMessage(string $sessionId, string $role, string $message): void
    {
        $data = [];

        if (file_exists($this->path)) {
            $data = json_decode(file_get_contents($this->path), true);
        }

        $data[$sessionId][] = [
            'role' => $role,
            'content' => $message
        ];

        file_put_contents($this->path, json_encode($data, JSON_PRETTY_PRINT));
    }
}
