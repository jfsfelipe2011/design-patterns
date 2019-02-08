<?php

declare(strict_types=1);

namespace App\Builder;

use App\Parte\Motor;
use App\Parte\Porta;
use App\Parte\Roda;
use App\Parte\Volante;
use App\Veiculo\Carro;
use App\Veiculo\Veiculo;

class CarroBuilder implements VeiculoBuilderInterface
{
    /** @var Carro */
    private $carro;

    /**
     * Método que gera uma instância de veículo
     *
     * @throws \RuntimeException
     */
    public function criaVeiculo(): void
    {
        $this->carro = new Carro();
    }

    /**
     * Método que deve adicionar volante ao veículo
     *
     * @throws \RuntimeException
     */
    public function addVolante(): void
    {
        $this->verificaCriacaoDeCarro();

        $this->carro->setPartes('Volante', new Volante('Esportivo'));
    }

    /**
     * Método que deve adicionar rodas ao veículo
     *
     * @throws \RuntimeException
     */
    public function addRodas(): void
    {
        $this->verificaCriacaoDeCarro();

        $this->carro->setPartes('Roda Dianteira Direita', new Roda('Aro 16, Pirelli'));
        $this->carro->setPartes('Roda Dianteira Esquerda', new Roda('Aro 16, Pirelli'));
        $this->carro->setPartes('Roda Traseira Direita', new Roda('Aro 16, Pirelli'));
        $this->carro->setPartes('Roda Traseira Esquerda', new Roda('Aro 16, Pirelli'));
    }

    /**
     * Método que deve adicionar motor ao veículo
     *
     * @throws \RuntimeException
     */
    public function addMotor(): void
    {
        $this->verificaCriacaoDeCarro();

        $this->carro->setPartes('Motor', new Motor('1.4'));
    }

    /**
     * Método que deve adicionar portas ao veículo
     *
     * @throws \RuntimeException
     */
    public function addPortas(): void
    {
        $this->verificaCriacaoDeCarro();

        $this->carro->setPartes('Porta Dianteira Direita', new Porta('Média'));
        $this->carro->setPartes('Porta Dianteira Esquerda', new Porta('Média'));
    }

    /**
     * Método que retorna um veículo pronto
     *
     * @return Veiculo
     * @throws \RuntimeException
     */
    public function getVeiculo(): Veiculo
    {
        $this->verificaCriacaoDeCarro();

        return $this->carro;
    }

    /**
     * Verifica se o carro foi criado
     *
     * @throws \RuntimeException
     */
    private function verificaCriacaoDeCarro()
    {
        if (!$this->carro instanceof Carro) {
            throw new \RuntimeException('Veículo não criado');
        }
    }
}