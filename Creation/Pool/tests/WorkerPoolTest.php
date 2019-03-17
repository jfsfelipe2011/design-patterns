<?php

declare(strict_types=1);

namespace Tests;

use App\CaracterWorker;
use App\WorkerPool;
use PHPUnit\Framework\TestCase;

class WorkerPoolTest extends TestCase
{
    /**
     * Teste get e count
     */
    public function testGeraUmNovoCaracterAoChamarUmaPool()
    {
        $pool = new WorkerPool();

        $this->assertInternalType("integer", $pool->count());
        $this->assertEquals( 0, $pool->count());

        $worker = $pool->get();

        $this->assertInternalType("object", $worker);
        $this->assertInstanceOf(CaracterWorker::class, $worker);
        $this->assertEquals( 1, $pool->count());
    }

    /**
     * Teste get e count
     */
    public function testGeraUmNovoCaracterSempreQueNaoTiverLivreNenhum()
    {
        $pool = new WorkerPool();

        $worker1 = $pool->get();
        $worker2 = $pool->get();

        $this->assertEquals(2, $pool->count());
        $this->assertInternalType("object", $worker1);
        $this->assertInternalType("object", $worker2);
        $this->assertInstanceOf(CaracterWorker::class, $worker1);
        $this->assertInstanceOf(CaracterWorker::class, $worker2);
        $this->assertNotSame($worker1, $worker2);
    }

    /**
     * Teste get, count e dispose
     */
    public function testNaoGeraUmNovoCaracterSeExistirAlgumLivre()
    {
        $pool = new WorkerPool();

        $worker1 = $pool->get();
        $worker2 = $pool->get();

        $pool->dispose($worker2);

        $this->assertEquals(2, $pool->count());

        $worker3 = $pool->get();

        $this->assertEquals(2, $pool->count());

        $this->assertSame($worker2, $worker3);
        $this->assertNotSame($worker1, $worker2);
        $this->assertNotSame($worker1, $worker3);
    }
}
