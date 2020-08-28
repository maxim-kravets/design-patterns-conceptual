<?php


namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


class BladePageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
    <div class="page">
        $renderedTitle
        <article class="content">{{ \$content }}</article>
    </div>\n
HTML;
    }
}