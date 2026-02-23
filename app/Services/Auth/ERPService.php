<?php

namespace App\Services\Auth;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class ERPService
{
    public PendingRequest $http;

    public function headers(): array
    {
        $headers= [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];

        if (\Auth::check())
        {
            $headers['Authorization'] = 'Bearer ' . \Auth::user()->token;
        }

        return  $headers;

    }
    public function __construct()
    {

        $this->http = Http::baseUrl(config('services.erp.url'));
    }

    public function authenticate(string $email, string $password): ?array
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])
        ->post(config('services.erp.url') . '/login', [
            'email' => $email,
            'password' => $password,
        ]);
        if ($response->successful()) {
            return $response->json(); // Should return user data/token
        }

        return null;
    }

    public function getLeads(int $page, int $perPage)
    {
        return $this->http->withHeaders($this->headers())->get("/leads?page=$page&per_page=$perPage")->json();

    }
}
