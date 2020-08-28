<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryExample;


interface ProductBInterface
{
    public function usefulFunctionB(): string;
    public function anotherUsefulFunctionB(ProductAInterface $collaborator): string;
}