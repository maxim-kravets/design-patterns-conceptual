<?php

namespace MaximKravets\DesignPatternsConceptual\ObserverExample;


use SplObjectStorage;
use SplObserver;
use SplSubject;

class Subject implements SplSubject
{
    public int $state = 0;

    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);

        echo 'Subject: observer with id ' . spl_object_id($observer) . ' was attached.' . PHP_EOL;
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);

        echo 'Subject: observer with id ' . spl_object_id($observer) . ' was detached.' . PHP_EOL;
    }

    public function notify(): void
    {
        echo 'Subject: Notifying observers...'.PHP_EOL;

        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function setState(int $state)
    {
        $this->state = $state;

        echo 'Subject: my state was changed, i need to notify my observers.'.PHP_EOL;

        $this->notify();
    }

}
