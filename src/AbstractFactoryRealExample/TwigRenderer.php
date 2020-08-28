<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;

use Twig\Environment;
use Twig\Loader\ArrayLoader;

class TwigRenderer implements TemplateRendererInterface
{
    public function render(string $templateString, array $arguments = []): string
    {
        $loader = new ArrayLoader(['twig.html' => $templateString]);
        $twig = new Environment($loader);

        return $twig->render('twig.html', $arguments);
    }
}