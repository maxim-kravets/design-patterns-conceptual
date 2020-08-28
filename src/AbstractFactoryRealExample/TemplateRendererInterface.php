<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


interface TemplateRendererInterface
{
    public function render(string $templateString, array $arguments = []): string;
}