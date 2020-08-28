<?php


namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryExample;


class ConcreteProductB2 implements ProductBInterface
{
    public function usefulFunctionB(): string
    {
        return "The result of the product B2.";
    }

    public function anotherUsefulFunctionB(ProductAInterface $collaborator): string
    {
        $result = $collaborator->usefulFunctionA();

        return "The result of the B2 collaborating with the ({$result})";
    }
}