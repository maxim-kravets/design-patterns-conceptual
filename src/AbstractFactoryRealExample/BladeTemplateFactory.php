<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


class BladeTemplateFactory implements TemplateFactoryInterface
{
    public function createTitleTemplate(): TitleTemplateInterface
    {
        return new BladeTitleTemplate();
    }

    public function createPageTemplate(): PageTemplateInterface
    {
        return new BladePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRendererInterface
    {
        return new BladeRenderer();
    }
}