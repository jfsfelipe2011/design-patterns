<?php

declare(strict_types=1);

namespace Tests;

use App\CaracterWorker;
use PHPUnit\Framework\TestCase;

class CaracterWorkerTest extends TestCase
{
    /**
     * Teste process
     */
    public function testRetornaUmCaracterAleatorio()
    {
        $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $seed = str_split($charset);

        $caracterWorker = new CaracterWorker();
        $caracter = $caracterWorker->process();

        $this->assertInternalType("string", $caracter);
        $this->assertTrue(in_array($caracter, $seed));
    }
}
