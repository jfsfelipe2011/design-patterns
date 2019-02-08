<?php

declare(strict_types=1);

namespace App\Builder;

use App\Veiculo\Veiculo;

interface VeiculoBuilderInterface
{
    /** Método que deve gerar uma instância de veículo */
    public function criaVeiculo(): void;

    /** Método que deve adicionar volante ao veículo */
    public function addVolante(): void;

    /** Método que deve adicionar rodas ao veículo */
    public function addRodas(): void;

    /** Método que deve adicionar motor ao veículo */
    public function addMotor(): void;

    /** Método que deve adicionar portas ao veículo */
    public function addPortas(): void;

    /** Método que retorna um veículo pronto */
    public function getVeiculo(): Veiculo;
}
