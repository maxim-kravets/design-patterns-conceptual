<?php

namespace MaximKravets\DesignPatternsConceptual\AbstractFactoryRealExample;


class SmartyRenderer implements TemplateRendererInterface
{
    public function render(string $templateString, array $arguments = []): string
    {
        $smarty = new \Smarty();
        foreach ($arguments as $name => $argument) {
            $smarty->assign($name, $argument);
        }

        ob_start();
        $smarty->display('string:'.$templateString);
        $template = ob_get_contents();
        ob_end_clean();

        return $template;
    }
}