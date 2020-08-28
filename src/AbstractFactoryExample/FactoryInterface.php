<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryExample;


interface FactoryInterface
{
    public function createProductA(): ProductAInterface;

    public function createProductB(): ProductBInterface;
}