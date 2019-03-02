<?php

declare(strict_types=1);

namespace App\Mail;

class Mail
{
    /**
     * Envia um e-mail
     *
     * @param string $to
     * @param string $from
     * @return string
     * @throws \Exception
     */
    public function enviar(string $to, string $from): string
    {
        if (empty($to) || empty($from)) {
            throw new \Exception("Informe um destinatário e um remetente");
        }

        return sprintf("E-mail enviado com sucesso de %s para %s", $from, $to);
    }
}
