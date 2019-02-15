<?php

declare(strict_types=1);

namespace Tests\Ebook;

use App\EBook\Kindle;
use PHPUnit\Framework\TestCase;

class KindleTest extends TestCase
{
    /**
     * Teste __construct
     */
    public function testMinimoDeTotalDePaginasEUm()
    {
        $totalPaginas = 1;
        $kindle = new Kindle(0);

        $this->assertEquals($totalPaginas, $kindle->getPage()[1]);

        $totalPaginas = 50;
        $kindle = new Kindle($totalPaginas);

        $this->assertEquals($totalPaginas, $kindle->getPage()[1]);
        $this->assertNotEquals(1, $kindle->getPage()[1]);
    }

    /**
     * Test pressNext
     * @throws \Exception
     */
    public function testIncrementaUmaPaginaAoUsarPressNext()
    {
        $page = 0;
        $kindle = new Kindle(100);

        $this->assertEquals($page, $kindle->getPage()[0]);

        $kindle->pressNext();
        $page++;

        $this->assertEquals($page, $kindle->getPage()[0]);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage End of Book
     *
     * @throws \Exception
     */
    public function testLancaExceptionCasoTentePassarPaginaMaiorQueOTotal()
    {
        $kindle = new Kindle(1);
        $kindle->pressNext();
        $kindle->pressNext();
    }

    /**
     * @throws \Exception
     */
    public function testDecrementaUmaPaginaAoUsarPressPrevious()
    {
        $page = 2;
        $kindle = new Kindle(100);
        $kindle->pressNext();
        $kindle->pressNext();

        $this->assertEquals($page, $kindle->getPage()[0]);

        $kindle->pressPrevious();
        $page--;

        $this->assertEquals($page, $kindle->getPage()[0]);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Beggining of Book
     *
     * @throws \Exception
     */
    public function testLancaExceptionCasoTenteVoltarUmaPaginaEEstejaNaPaginaZero()
    {
        $kindle = new Kindle(1);
        $kindle->pressPrevious();
    }

    /**
     * Teste getPage
     *
     * @throws \Exception
     */
    public function testRetornaNumeroPaginaETotalComoArray()
    {
        $page = 0;
        $total = 100;
        $kindle = new Kindle($total);


        while ($page < 20) {
            $kindle->pressNext();
            $page++;
        }

        $currentPage = $kindle->getPage();

        $this->assertInternalType('array', $currentPage);
        $this->assertEquals($page, $currentPage[0]);
        $this->assertEquals($total, $currentPage[1]);
    }
}
