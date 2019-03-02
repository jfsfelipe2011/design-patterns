<?php

declare(strict_types=1);

namespace App\Invoker;

use App\Command\CommandInterface;
use App\Command\EmailCommand;
use App\Command\SaveCommand;

class Invoker
{
    /** @var CommandInterface */
    private $inicio;

    /** @var CommandInterface */
    private $fim;

    /**
     * Seta um comando inicial
     *
     * @param CommandInterface $inicio
     */
    public function setInicio(SaveCommand $inicio): void
    {
        $this->inicio = $inicio;
    }

    /**
     * Seta um comando final
     *
     * @param CommandInterface $fim
     */
    public function setFim(EmailCommand $fim): void
    {
        $this->fim = $fim;
    }

    /**
     * Faz a criação de um usuário e envia e-mail
     */
    public function criaUsuario(): void
    {
        echo "Criando um novo usuario<br><br>";

        if ($this->inicio instanceof CommandInterface) {
            echo $this->inicio->execute();
        }

        echo "<br><br>Enviando e-mail de aviso<br><br>";

        if ($this->fim instanceof CommandInterface) {
            echo $this->fim->execute();
        }

        echo "<br><br>Comando executado com sucesso";
    }
}
