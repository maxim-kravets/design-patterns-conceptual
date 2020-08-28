<?php

namespace MaximKravets\DesignPatternsConceptual\ObserverExample;


use SplObserver;
use SplSubject;

abstract class ObserverAbstract implements SplObserver
{
    public function update(SplSubject $subject)
    {
        $path = explode('\\', static::class);
        $class_name = array_pop($path);

        echo $class_name.': i got notification that subject state was changed to '.$subject->state.PHP_EOL;
    }

}