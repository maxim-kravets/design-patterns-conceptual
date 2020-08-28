<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


abstract class BasePageTemplate implements PageTemplateInterface
{
    protected TitleTemplateInterface $titleTemplate;

    public function __construct(TitleTemplateInterface $titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;
    }
}