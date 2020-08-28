<?php


namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryExample;


class ConcreteFactory2 implements FactoryInterface
{
    public function createProductA(): ProductAInterface
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): ProductBInterface
    {
        return new ConcreteProductB2();
    }
}