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
        $this->loadMigrationsFrom([
            database_path('migrations/covoiturage'),
            database_path('migrations/employe'),
            database_path('migrations/frais'),
            database_path('migrations/parametrage'),
            database_path('migrations/salle'),
            database_path('migrations/visite'),
        ]);
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
