<?php

declare(strict_types=1);

namespace App;

class UsuarioController
{
    /** @var Logger */
    private $logger;

    /**
     * UsuarioController constructor.
     * @param Logger $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Resposta de página index
     *
     * @return string
     */
    public function index(): string
    {
        echo $this->logger->debug("Acessado página inicial");

        return "<br>Página inicial";
    }
}
