<?php

declare(strict_types=1);

namespace Tests\Boleto;

use App\Boleto\BoletoA;
use App\Boleto\BoletoInterface;
use PHPUnit\Framework\TestCase;

class BoletoATest extends TestCase
{
    /** @var int */
    const TAMANHO_TOTAL = 8;

    /** @var float */
    private $valor = 100.00;

    /** @var BoletoInterface */
    private $boleto;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->boleto = new BoletoA(
            $this->valor,
            'Beneficiario Teste',
            'Pagador Teste'
        );
    }

    /**
     * Teste geraNossoNumero
     */
    public function testNossoNumeroGeradoTemQueSerInteiroComTamanhoOito()
    {
        $nossoNumero = $this->boleto->gerarNossoNumero();

        $this->assertInternalType('int', $nossoNumero);
        $this->assertTrue(self::TAMANHO_TOTAL === strlen((string) $nossoNumero));
    }

    /**
     * Teste getValor
     */
    public function testValorDoBoletoDeveSerFloatESemTaxa()
    {
        $valor = $this->boleto->getValor();

        $this->assertInternalType('float', $valor);
        $this->assertEquals($this->valor, $valor);
    }
}