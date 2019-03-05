<?php

declare(strict_types=1);

namespace Tests;

use App\User;
use App\UserObserver;
use PHPUnit\Framework\TestCase;

class UserObserverTests extends TestCase
{
    /**
     * Teste observer
     */
    public function testSalvaUsuarioQueTeveSeuEmailAlterado()
    {
        $user = new User();
        $observer = new UserObserver();

        $user->attach($observer);

        $user->trocaEmail('teste1@email.com');
        $user->trocaEmail('teste2@email.com');
        $user->trocaEmail('teste3@email.com');

        $this->assertCount(3, $observer->getUsuariosAlterados());

        foreach ($observer->getUsuariosAlterados() as $user) {
            $this->assertInstanceOf(User::class, $user);
        }
    }
}
