<?php

declare(strict_types=1);

namespace App\Livro;

interface LivroInterface
{
    /** Método que deve fazer a abertura do Livro */
    public function abreLivro(): void;

    /** Método que deve virar a página do Livro*/
    public function viraPagina(): void;

    /** Método que deve voltar para a página anterior do Livro */
    public function voltaPaginaAnterior(): void;

    /** Método que deve retornar a página atual do livro */
    public function getPaginaAtual(): int;

    /** Método que deve fechar um livro */
    public function fechaLivro(): void;
}