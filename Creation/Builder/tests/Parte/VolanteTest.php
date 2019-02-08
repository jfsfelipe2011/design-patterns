<?php

declare(strict_types=1);

namespace Tests\Parte;

use App\Parte\Volante;
use PHPUnit\Framework\TestCase;

class VolanteTest extends TestCase
{
    /** @var string  */
    const NOME_VOLANTE = 'Volante Esportivo';

    /** @var Volante */
    private $volante;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->volante = new Volante(self::NOME_VOLANTE);
    }

    /**
     * Testa __toString
     */
    public function testRetornaNomeEmFormatoStringNoMetodoToString()
    {
        $this->assertInternalType('string', $this->volante->__toString());
        $this->assertEquals(self::NOME_VOLANTE, $this->volante->__toString());
    }
}