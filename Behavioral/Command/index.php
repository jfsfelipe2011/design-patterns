<?php

declare(strict_types=1);

use App\Mail\Mail;
use App\Repository\UsuarioRepository;
use App\Command\SaveCommand;
use App\Command\EmailCommand;
use App\Invoker\Invoker;

require_once __DIR__ . '/vendor/autoload.php';

$repository = new UsuarioRepository();
$mail = new Mail();

$dados = [
    'nome'      => 'Raul da Silva',
    'email'     => 'raul@gmail.com',
    'documento' => '21011129345'
];

$invoker = new Invoker();
$invoker->setInicio(new SaveCommand($repository, $dados));
$invoker->setFim(new EmailCommand($mail, $dados['email'], "admin@sistema.com"));

$invoker->criaUsuario();
