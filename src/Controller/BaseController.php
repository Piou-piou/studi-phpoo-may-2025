<?php

namespace App\Controller;

class BaseController
{
    protected function render(string $template, array $data = []): string
    {
        foreach ($data as $key => $value) {
            // articles = [ // données des articles ]
            $$key = $value;
        }
        unset($data);

        ob_start();
        require_once TEMPLATE_PATH;
        $content = ob_get_contents();
        ob_clean();

        return $content;
    }
}