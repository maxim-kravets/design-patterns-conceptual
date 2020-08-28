<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


use Illuminate\Support\Facades\Blade;

class BladeRenderer implements TemplateRendererInterface
{
    public function render(string $templateString, array $arguments = []): string
    {
        return Blade::compileString($templateString);
    }
}
