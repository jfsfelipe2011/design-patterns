<?php

declare(strict_types=1);

namespace Tests\Database;

use App\Database\DBService;
use PHPUnit\Framework\TestCase;

class DBServiceTest extends TestCase
{
    /**
     * Teste getSQL
     */
    public function testRetornaSQLEmFormatoString()
    {
        $database = new DBService();

        $this->assertInternalType("string", $database->getSQL('users'));
        $this->assertEquals("SELECT * FROM users", $database->getSQL('users'));
    }
}
