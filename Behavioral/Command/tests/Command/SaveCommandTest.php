<?php

declare(strict_types=1);

namespace Tests\Command;

use App\Command\SaveCommand;
use App\Repository\UsuarioRepository;
use PHPUnit\Framework\TestCase;

class SaveCommandTest extends TestCase
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
     * Teste execute
     *
     * @throws \Exception
     */
    public function testRetornaSucessoEDadosSalvosEmFormatoString()
    {
        $dados = [
            'nome'      => 'Gabriel Valim',
            'email'     => 'valim@email.com',
            'documento' => '10029738712'
        ];

        $command = new SaveCommand($this->repository, $dados);
        $resultado = $command->execute();

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
        $command = new SaveCommand($this->repository, []);
        $command->execute();
    }
}
