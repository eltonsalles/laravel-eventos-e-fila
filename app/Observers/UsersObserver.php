<?php

namespace App\Observers;


use App\Mail\UserRegistered;

class UsersObserver
{
    // Antes de salvar no banco de dados
    public function creating($user)
    {
        \Log::info("Usuário {$user->email} vai ser criado");
    }

    // Após salvar no banco de dados
    public function created($user)
    {
//        \Mail::to($user)->send(new UserRegistered($user));
        \Log::info("Usuário {$user->email} foi criado");
    }

    // Antes de alterar no banco de dados
    public function updating($user)
    {
        \Log::info("Usuário {$user->email} vai ser alterado");
    }

    // Após alterar no banco de dados
    public function updated($user)
    {
        \Log::info("Usuário {$user->email} foi alterado");
    }

    // Antes de salvar ou alterar no banco de dados
    public function saving($user)
    {
        \Log::info("Usuário {$user->email} vai ser salvo");
    }

    // Após salvar ou alterar no banco de dados
    public function saved($user)
    {
        \Log::info("Usuário {$user->email} foi salvo");
    }
}