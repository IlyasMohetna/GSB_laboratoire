<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Pulse\Facades\Pulse;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Pulse::users(function ($ids) {
            return User::findMany($ids)->map(fn ($user) => [
                'id' => $user->code_employe,
                'name' => $user->prenom.' '.$user->nom,
                'extra' => $user->email,
                'avatar' => '',
            ]);
        });
    }
}
