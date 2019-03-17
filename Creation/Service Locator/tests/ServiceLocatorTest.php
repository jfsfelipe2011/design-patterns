<?php

declare(strict_types=1);

namespace Tests;

use App\Database\DBService;
use App\Logger\LogService;
use App\ServiceLocator;
use PHPUnit\Framework\TestCase;

class ServiceLocatorTest extends TestCase
{
    /**
     * Teste add e has
     */
    public function testRetornaSeExisteUmServicoNoLocator()
    {
        $locator = new ServiceLocator();
        $locator->add(DBService::class, new DBService());

        $this->assertInternalType("boolean", $locator->has(DBService::class));
        $this->assertTrue($locator->has(DBService::class));
        $this->assertFalse($locator->has(LogService::class));
    }

    /**
     * Teste add e get
     */
    public function testRetornoDoServicoSeOMesmoExistirNoLocator()
    {
        $locator = new ServiceLocator();
        $locator->add(DBService::class, new DBService());

        $this->assertInternalType("object", $locator->get(DBService::class));
        $this->assertInstanceOf(DBService::class, $locator->get(DBService::class));
        $this->assertFalse($locator->get(LogService::class));
    }
}
