<?php

declare(strict_types=1);

namespace App;

class UserObserver implements \SplObserver
{
    /** @var array */
    private $usuariosAlterados;

    /**
     * Receive update from subject
     *
     * @return void
     */
    public function update(\SplSubject $subject)
    {
        $this->usuariosAlterados[] = clone $subject;
    }

    /**
     * Retorna os usuários que foram alterados
     *
     * @return array
     */
    public function getUsuariosAlterados(): array
    {
        return $this->usuariosAlterados;
    }
}
