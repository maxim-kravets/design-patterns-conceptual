<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


class SmartyTitleTemplate implements TitleTemplateInterface
{
    public function getTemplateString(): string
    {
        return '<h1> {$title} </h1>';
    }
}