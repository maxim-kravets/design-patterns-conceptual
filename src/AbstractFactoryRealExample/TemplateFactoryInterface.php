<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


/**
 * Abstract factory
 */
interface TemplateFactoryInterface
{
    public function createTitleTemplate(): TitleTemplateInterface;

    public function createPageTemplate(): PageTemplateInterface;

    public function getRenderer(): TemplateRendererInterface;
}