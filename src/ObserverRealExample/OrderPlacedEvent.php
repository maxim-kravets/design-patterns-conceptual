<?php

namespace MaximKravets\DesignPatternsConceptual\ObserverRealExample;

use Symfony\Contracts\EventDispatcher\Event;


/**
 * Событие order.placed запускается каждый раз, когда создаётся заказ
 * в системе.
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