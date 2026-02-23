<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Facades\Hash;

class ERPUserProvider implements UserProvider
{

    public function __construct(protected ERPService $erpService) {}

    public function retrieveByCredentials(array $credentials)
    {
        if (empty($credentials)) return null;

        // 1. Check ERP API
        $erpUser = $this->erpService->authenticate(
            $credentials['email'],
            $credentials['password']
        );
        if ($erpUser) {
            // 2. Create or Update a "Shadow User" locally to maintain the session
            return User::updateOrCreate(
                ['email' => $erpUser['email']],
                [
                    'name' => $erpUser['name'],
                    'phone_number' => $erpUser['phone_number'],
                    'token' => $erpUser['token'],
                    'password' => Hash::make($credentials['password']), // Sync password for session persistence
                ]
            );
        }

        return null;
    }

    // Standard boilerplate methods for UserProvider interface
    public function retrieveById($identifier) { return User::find($identifier); }
    public function retrieveByToken($identifier, $token) { User::query()->where('token', $token)->first(); }
    public function updateRememberToken(Authenticatable $user, $token) {
        $user->setRememberToken($token);
        $user->save();
    }
    public function validateCredentials(Authenticatable $user, array $credentials) { return true; }
    public function rehashPasswordIfRequired(Authenticatable $user, array $credentials, bool $force = false) {}
}
