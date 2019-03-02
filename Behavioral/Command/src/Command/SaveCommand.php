<?php

declare(strict_types=1);

namespace App\Command;

use App\Repository\UsuarioRepository;

class SaveCommand implements CommandInterface
{
    /** @var UsuarioRepository */
    private $receiver;

    /** @var array */
    private $dados;

    /**
     * SaveCommand constructor.
     * @param UsuarioRepository $receiver
     * @param array $dados
     */
    public function __construct(UsuarioRepository $receiver, array $dados)
    {
        $this->receiver = $receiver;
        $this->dados    = $dados;
    }

    /**
     * Método que executa o comando
     *
     * @return string
     * @throws \Exception
     */
    public function execute(): string
    {
        return $this->receiver->salvar($this->dados);
    }
}
