<?php

declare(strict_types=1);

namespace App\Database;

class DBService implements DBServiceInterface
{
    /**
     * Retorna uma instrução SQL
     *
     * @param string $table
     * @return string
     */
    public function getSQL(string $table): string
    {
        return sprintf("SELECT * FROM %s", $table);
    }
}
