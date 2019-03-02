<?php

declare(strict_types=1);

namespace App\Repository;

class UsuarioRepository
{
    /**
     * Método que salva os dados
     *
     * @param array $dados
     * @return string
     * @throws \Exception
     */
    public function salvar(array $dados): string
    {
        if (empty($dados)) {
            throw new \Exception("Dados estão vazios");
        }

        $result = "Dados salvos com sucesso: <br>";

        foreach ($dados as $chave => $dado) {
            $result .= sprintf("%s = %s", $chave, $dado) . "<br>";
        }

        return $result;
    }
}
