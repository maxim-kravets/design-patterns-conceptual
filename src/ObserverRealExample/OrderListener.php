<?php

namespace MaximKravets\DesignPatternsConceptual\ObserverRealExample;


use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Symfony\Contracts\EventDispatcher\Event;

class OrderListener
{
    private Logger $logger;

    public function __construct()
    {
        $this->logger = new Logger('orders');
        $this->logger->pushHandler(new StreamHandler('var/log/orders.log'));
    }

    public function logOrderPlaced(Event $event)
    {
        $message = 'New order was placed: product name - '.$event->getOrder()->getProductName().', product price - '.$event->getOrder()->getProductPrice().'$';

        $this->logger->info($message);
    }

}