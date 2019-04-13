<?php

declare(strict_types=1);

namespace Tests;

use App\Multiton;
use PHPUnit\Framework\TestCase;

class MultitonTest extends TestCase
{
    /**
     * Teste getInstance
     */
    public function testVerificaSeInstanciasSaoIguas()
    {
        $objeto1 = Multiton::getInstance(Multiton::INSTANCIA1);
        $objeto2 = Multiton::getInstance(Multiton::INSTANCIA1);

        $this->assertInstanceOf(Multiton::class, $objeto1);
        $this->assertInstanceOf(Multiton::class, $objeto2);
        $this->assertSame($objeto1, $objeto2);
    }

    /**
     * Teste getInstance
     */
    public function testVerifificaSeInstanciasSaoDiferentes()
    {
        $objeto1 = Multiton::getInstance(Multiton::INSTANCIA1);
        $objeto2 = Multiton::getInstance(Multiton::INSTANCIA2);

        $this->assertInstanceOf(Multiton::class, $objeto1);
        $this->assertInstanceOf(Multiton::class, $objeto2);
        $this->assertNotSame($objeto1, $objeto2);
    }
}
