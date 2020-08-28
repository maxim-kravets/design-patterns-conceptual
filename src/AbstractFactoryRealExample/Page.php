<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


class Page
{
    public string $title;

    public string $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function render(TemplateFactoryInterface $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();

        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content
        ]);
    }
}