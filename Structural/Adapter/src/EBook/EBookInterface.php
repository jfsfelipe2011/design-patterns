<?php

declare(strict_types=1);

namespace App\EBook;

interface EBookInterface
{
    /** Unlock the screen */
    public function unlock(): void;

    /** Lock the screen */
    public function lock(): void;

    /** Press next page */
    public function pressNext(): void;

    /** Press previous page */
    public function pressPrevious(): void;

    /** Get current page */
    public function getPage(): array;
}