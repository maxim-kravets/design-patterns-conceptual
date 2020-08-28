<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


class SmartyTemplateFactory implements TemplateFactoryInterface
{
    public function createTitleTemplate(): TitleTemplateInterface
    {
        return new SmartyTitleTemplate();
    }

    public function createPageTemplate(): PageTemplateInterface
    {
        return new SmartyPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRendererInterface
    {
        return new SmartyRenderer();
    }
}