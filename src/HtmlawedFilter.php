<?php

namespace XssFilterComparator;

use Drupal\Component\Utility\Xss;
use Symfony\Component\HtmlSanitizer\HtmlSanitizer;
use Symfony\Component\HtmlSanitizer\HtmlSanitizerConfig;

class HtmlawedFilter extends FilterBase
{

    protected string $package = 'htmlawed/htmlawed-class';

    public function filter(string $payload): string
    {
        return \htmLawed::hl($payload, ['safe' => TRUE]);
    }
}
