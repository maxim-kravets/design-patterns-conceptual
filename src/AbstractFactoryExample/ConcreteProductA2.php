<?php


namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryExample;


class ConcreteProductA2 implements ProductAInterface
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}