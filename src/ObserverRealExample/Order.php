<?php

namespace MaximKravets\DesignPatternsConceptual\ObserverRealExample;


class Order
{
    private string $product_name;
    private string $product_price;

    public function __construct(string $product_name, string $product_price)
    {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
    }

    public function getProductName(): string
    {
        return $this->product_name;
    }

    public function getProductPrice(): string
    {
        return $this->product_price;
    }


}