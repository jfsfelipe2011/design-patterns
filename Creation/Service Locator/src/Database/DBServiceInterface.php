<?php

declare(strict_types=1);

namespace App\Database;

interface DBServiceInterface
{
    /** Retorna uma instrução SQL */
    public function getSQL(string $table): string;
}
