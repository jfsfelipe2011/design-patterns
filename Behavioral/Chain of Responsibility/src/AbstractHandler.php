<?php

declare(strict_types=1);

namespace App;

abstract class AbstractHandler implements Handler
{
    /** @var Handler */
    private $nextHandler;

    /**
     * Método que seta um Handler para ser o próximo
     *
     * @param Handler $handler
     * @return Handler
     */
    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        return $this->nextHandler;
    }

    /**
     * Método que executa a ação do Handler
     *
     * @param string $request
     * @return string
     */
    public function handle(string $request): string
    {
        if ($this->nextHandler instanceof Handler) {
            return $this->nextHandler->handle($request);
        }

        return "Nenhum animal respondeu!!";
    }
}
