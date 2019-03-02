<?php

declare(strict_types=1);

namespace App\Command;

use App\Mail\Mail;

class EmailCommand implements CommandInterface
{
    /** @var Mail */
    private $receiver;

    /** @var string */
    private $to;

    /** @var string */
    private $from;

    /**
     * EmailCommand constructor.
     * @param Mail $receiver
     * @param string $to
     * @param string $from
     */
    public function __construct(Mail $receiver, string $to, string $from)
    {
        $this->receiver = $receiver;
        $this->to       = $to;
        $this->from     = $from;
    }

    /**
     * Método que executa o comando
     *
     * @return string
     * @throws \Exception
     */
    public function execute(): string
    {
        return $this->receiver->enviar($this->to, $this->from);
    }
}
