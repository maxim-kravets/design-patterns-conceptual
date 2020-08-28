<?php


namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryExample;


class ConcreteFactory1 implements FactoryInterface
{
    public function createProductA(): ProductAInterface
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): ProductBInterface
    {
        return new ConcreteProductB1();
    }
}