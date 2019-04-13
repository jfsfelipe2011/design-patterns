<?php

declare(strict_types=1);

namespace App\Builder;

use App\Parte\Motor;
use App\Parte\Porta;
use App\Parte\Roda;
use App\Parte\Volante;
use App\Veiculo\Caminhao;
use App\Veiculo\Veiculo;

class CaminhaoBuilder implements VeiculoBuilderInterface
{
    /** @var Caminhao */
    private $caminhao;

    /**
     * Método que gera uma instância de veículo
     *
     * @throws \RuntimeException
     */
    public function criaVeiculo(): void
    {
        $this->caminhao = new Caminhao();
    }

    /**
     * Método que deve adicionar volante ao veículo
     *
     * @throws \RuntimeException
     */
    public function addVolante(): void
    {
        $this->verificaCriacaoDeCaminhao();

        $this->caminhao->setPartes('Volante', new Volante('Caminhão MB'));
    }

    /**
     * Método que deve adicionar rodas ao veículo
     *
     * @throws \RuntimeException
     */
    public function addRodas(): void
    {
        $this->verificaCriacaoDeCaminhao();

        $this->caminhao->setPartes('Roda Dianteira Direita', new Roda('Aro 24, Pirelli'));
        $this->caminhao->setPartes('Roda Dianteira Esquerda', new Roda('Aro 24, Pirelli'));
        $this->caminhao->setPartes('Roda Traseira 1 Direita', new Roda('Aro 24, Pirelli'));
        $this->caminhao->setPartes('Roda Traseira 1 Esquerda', new Roda('Aro 24, Pirelli'));
        $this->caminhao->setPartes('Roda Traseira 2 Direita', new Roda('Aro 24, Pirelli'));
        $this->caminhao->setPartes('Roda Traseira 2 Esquerda', new Roda('Aro 24, Pirelli'));
    }

    /**
     * Método que deve adicionar motor ao veículo
     *
     * @throws \RuntimeException
     */
    public function addMotor(): void
    {
        $this->verificaCriacaoDeCaminhao();

        $this->caminhao->setPartes('Motor', new Motor('V 12 a Diesel'));
    }

    /**
     * Método que deve adicionar portas ao veículo
     *
     * @throws \RuntimeException
     */
    public function addPortas(): void
    {
        $this->verificaCriacaoDeCaminhao();

        $this->caminhao->setPartes('Porta Dianteira Direita', new Porta('Grande'));
        $this->caminhao->setPartes('Porta Dianteira Esquerda', new Porta('Grande'));
    }

    /**
     * Método que retorna um veículo pronto
     *
     * @return Veiculo
     * @throws \RuntimeException
     */
    public function getVeiculo(): Veiculo
    {
        $this->verificaCriacaoDeCaminhao();

        return $this->caminhao;
    }

    /**
     * Verifica se o carro foi criado
     *
     * @throws \RuntimeException
     */
    private function verificaCriacaoDeCaminhao()
    {
        if (!$this->caminhao instanceof Caminhao) {
            throw new \RuntimeException('Veículo não criado');
        }
    }
}