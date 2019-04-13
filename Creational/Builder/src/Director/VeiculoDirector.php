<?php

declare(strict_types=1);

namespace App\Director;

use App\Builder\VeiculoBuilderInterface;
use App\Veiculo\Veiculo;

class VeiculoDirector
{
    /**
     * Monta um novo veiculo
     *
     * @param VeiculoBuilderInterface $builder
     * @return Veiculo
     */
    public function build(VeiculoBuilderInterface $builder): Veiculo
    {
        $builder->criaVeiculo();
        $builder->addVolante();
        $builder->addMotor();
        $builder->addRodas();
        $builder->addPortas();

        return $builder->getVeiculo();
    }
}