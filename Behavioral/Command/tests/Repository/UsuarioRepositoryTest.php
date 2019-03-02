<?php

declare(strict_types=1);

namespace Tests\Repository;

use App\Repository\UsuarioRepository;
use PHPUnit\Framework\TestCase;

class UsuarioRepositoryTest extends TestCase
{
    /** @var UsuarioRepository */
    private $repository;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->repository = new UsuarioRepository();
    }

    /**
     * Teste salvar
     */
    public function testRetornaSucessoEDadosSalvosEmFormatoString()
    {
        $dados = [
            'nome'      => 'Gabriel Valim',
            'email'     => 'valim@email.com',
            'documento' => '10029738712'
        ];

        $resultado = $this->repository->salvar($dados);

        $this->assertInternalType("string", $resultado);
        $this->assertContains("Dados salvos com sucesso", $resultado);
        $this->assertContains("Gabriel Valim", $resultado);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Dados estão vazios
     *
     * @throws \Exception
     */
    public function testLancaExcessaoSeDadosEstiveremVazios()
    {
        $this->repository->salvar([]);
    }
}
