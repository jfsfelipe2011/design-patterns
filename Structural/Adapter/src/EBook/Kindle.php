<?php

declare(strict_types=1);

namespace App\EBook;

class Kindle implements EBookInterface
{
    /** @var int  */
    const MIN_PAGES = 1;

    /** @var int */
    private $totalPages;

    /** @var int */
    private $page;

    public function __construct(int $totalPages)
    {
        $this->totalPages = $totalPages < self::MIN_PAGES ? self::MIN_PAGES : $totalPages;
        $this->page       = 0;
    }

    /** Unlock the screen */
    public function unlock(): void
    {
        // TODO: Implement unlock() method.
    }

    /** Lock the screen */
    public function lock(): void
    {
        // TODO: Implement lock() method.
    }

    /**
     * Press next page
     *
     * @throws \Exception
     */
    public function pressNext(): void
    {
        if ($this->page >= $this->totalPages) {
            throw new \Exception('End of Book');
        }

        $this->page++;
    }

    /**
     * Press previous page
     *
     * @throws \Exception
     */
    public function pressPrevious(): void
    {
        if ($this->page === 0) {
            throw new \Exception('Beggining of Book');
        }

        $this->page--;
    }

    /** Get current page */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
