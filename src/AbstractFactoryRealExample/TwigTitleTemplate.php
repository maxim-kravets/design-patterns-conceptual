<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


class TwigTitleTemplate implements TitleTemplateInterface
{
    public function getTemplateString(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}