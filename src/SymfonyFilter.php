<?php

namespace XssFilterComparator;

use Drupal\Component\Utility\Xss;
use Symfony\Component\HtmlSanitizer\HtmlSanitizer;
use Symfony\Component\HtmlSanitizer\HtmlSanitizerConfig;

class SymfonyFilter extends FilterBase {

    protected string $package = 'symfony/html-sanitizer';

    public function filter(string $payload): string
    {
        $config = new HtmlSanitizerConfig();
        $config = $config->allowSafeElements();
        $sanitizer = new HtmlSanitizer($config);

        return $sanitizer->sanitize($payload);
    }
}
