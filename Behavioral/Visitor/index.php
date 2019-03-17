<?php

declare(strict_types=1);

use App\Entidade\Funcionario;
use App\Entidade\Departamento;
use App\Entidade\Empresa;
use App\Visitor\SalarioReport;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Empresa =================";
echo "<br><br><br>";

$rh = new Departamento(
    'Recursos Humanos',
    [
        new Funcionario('Amanda Silva', 'assistencia de RH', 1200.00),
        new Funcionario('Carol Santos', 'recrutadora', 2000.00),
        new Funcionario('Manuela Costa', 'gerente de RH', 3200.00)
    ]
);

$dp = new Departamento(
    'Departamento Pessoal',
    [
        new Funcionario('Carlos Ambrosio', 'assistencia de DP', 1500.00),
        new Funcionario('Helio Santos', 'gerente de DP', 4000.00)
    ]
);

$empresa = new Empresa('Trustee Corp', [$rh, $dp]);

echo $empresa->accept(new SalarioReport());
