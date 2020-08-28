<?php


namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryExample;


class ConcreteProductA1 implements ProductAInterface
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}