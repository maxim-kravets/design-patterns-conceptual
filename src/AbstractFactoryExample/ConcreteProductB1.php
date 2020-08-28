<?php


namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryExample;


class ConcreteProductB1 implements ProductBInterface
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B1.";
    }

    public function anotherUsefulFunctionB(ProductAInterface $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B1 collaborating with the ({$result})";
    }
}