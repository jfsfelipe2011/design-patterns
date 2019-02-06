<?php

declare(strict_types=1);

namespace Tests\Boleto;

use App\Boleto\BoletoB;
use App\Boleto\BoletoInterface;
use PHPUnit\Framework\TestCase;

class BoletoBTest extends TestCase
{
    /** @var int */
    const TAMANHO_TOTAL = 10;

    /** @var float */
    private $valor = 100.00;

    /** @var BoletoInterface */
    private $boleto;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->boleto = new BoletoB(
            $this->valor,
            'Beneficiario Teste',
            'Pagador Teste'
        );
    }

    /**
     * Teste geraNossoNumero
     */
    public function testNossoNumeroGeradoTemQueSerInteiroComTamanhoDez()
    {
        $nossoNumero = $this->boleto->gerarNossoNumero();

        $this->assertInternalType('int', $nossoNumero);
        $this->assertTrue(self::TAMANHO_TOTAL === strlen((string) $nossoNumero));
    }

    /**
     * Teste getValor
     */
    public function testValorDoBoletoDeveSerFloatEComTaxa()
    {
        $valor = $this->boleto->getValor();

        $this->assertInternalType('float', $valor);
        $this->assertEquals($this->valor + BoletoB::TAXA, $valor);
    }
}