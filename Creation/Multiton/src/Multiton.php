<?php

declare(strict_types=1);

namespace App;

final class Multiton
{
    /** @var string */
    const INSTANCIA1 = '1';

    /** @var string */
    const INSTANCIA2 = '2';

    /** @var array */
    private static $instancias = [];

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    /**
     * @param string $instancia
     * @return Multiton
     */
    public static function getInstance(string $instancia): Multiton
    {
        if (!isset(self::$instancias[$instancia])) {
            self::$instancias[$instancia] = new self();
        }

        return self::$instancias[$instancia];
    }
}
