<?php

namespace MaximKravets\DesignPatternsConceptual\ObserverRealExample;

use Symfony\Contracts\EventDispatcher\Event;


/**
 * order.placed event is triggered every time when order created.
 */
class OrderPlacedEvent extends Event
{
    const NAME = 'order.placed';

    protected Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function getOrder()
    {
        return $this->order;
    }
}