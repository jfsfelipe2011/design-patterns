<?php

declare(strict_types=1);

namespace App;

class User implements \SplSubject
{
    /** @var string */
    private $email;

    /** @var \SplObjectStorage */
    private $observers;

    /**
     * UserObserver constructor.
     */
    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * Attach an SplObserver
     *
     * @return void
     */
    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * Detach an observer
     *
     * @return void
     */
    public function detach(\SplObserver $observer):void
    {
        $this->observers->detach($observer);
    }

    /**
     * Notify an observer
     *
     * @return void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * Altera o e-mail e faz as notificações
     *
     * @param string $email
     */
    public function trocaEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }
}
