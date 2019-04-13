<?php

declare(strict_types=1);

namespace Tests;

use App\Registry;
use App\Servicos\Connection;
use App\Servicos\Logger;
use App\Servicos\Mail;
use App\Servicos\ServiceInterface;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    /** @var Mail */
    private $mail;

    /** @var Logger */
    private $logger;

    /** @var Connection */
    private $connection;

    /** @var Registry */
    private $registry;

    protected function setUp()
    {
        $this->mail = new Mail();
        $this->logger = new Logger();
        $this->connection = new Connection();
        $this->registry = new Registry();
    }

    public function testReturnServicosQuandoOsMesmosSaoInformados()
    {
        $this->registry->set('Mail', $this->mail);
        $this->registry->set('Logger', $this->logger);
        $this->registry->set('Connection', $this->connection);

        $this->assertInstanceOf(Mail::class, $this->registry->get('Mail'));
        $this->assertInstanceOf(ServiceInterface::class, $this->registry->get('Mail'));

        $this->assertInstanceOf(Logger::class, $this->registry->get('Logger'));
        $this->assertInstanceOf(ServiceInterface::class, $this->registry->get('Logger'));

        $this->assertInstanceOf(Connection::class, $this->registry->get('Connection'));
        $this->assertInstanceOf(ServiceInterface::class, $this->registry->get('Connection'));
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Serviço não permitido
     */
    public function testLancaExcecaoCasoServicoNaoSejaPermitido()
    {
        $this->registry->set('Std', $this->mail);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Serviço não encontrado
     */
    public function testLancaExcecaoCasoNaoExistaServico()
    {
        $this->registry->get('Std');
    }
}
