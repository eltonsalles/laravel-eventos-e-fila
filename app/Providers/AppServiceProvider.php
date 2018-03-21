<?php

namespace App\Providers;

use App\Mail\UserRegistered;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Antes de salvar no banco de dados
        User::creating(function ($user) {
            \Log::info("Usuário {$user->email} vai ser criado");
        });

        // Após salvar no banco de dados
        User::created(function ($user) {
//            \Mail::to($user)->send(new UserRegistered($user));
            \Log::info("Usuário {$user->email} foi criado");
        });

        // Antes de alterar no banco de dados
        User::updating(function ($user) {
            \Log::info("Usuário {$user->email} vai ser alterado");
        });

        // Após alterar no banco de dados
        User::updated(function ($user) {
            \Log::info("Usuário {$user->email} foi alterado");
        });

        // Antes de salvar ou alterar no banco de dados
        User::saving(function ($user) {
            \Log::info("Usuário {$user->email} vai ser salvo");
        });

        // Após salvar ou alterar no banco de dados
        User::saved(function ($user) {
            \Log::info("Usuário {$user->email} foi salvo");
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
