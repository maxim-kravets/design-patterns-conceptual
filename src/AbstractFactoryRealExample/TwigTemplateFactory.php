<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


class TwigTemplateFactory implements TemplateFactoryInterface
{
    public function createTitleTemplate(): TitleTemplateInterface
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplateInterface
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRendererInterface
    {
        return new TwigRenderer();
    }
}
