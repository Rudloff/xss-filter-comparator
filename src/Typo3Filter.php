<?php

namespace XssFilterCompatator;

use TYPO3\HtmlSanitizer\Builder\CommonBuilder;

class Typo3Filter extends FilterBase {

    protected string $package = 'typo3/html-sanitizer';

    public function filter(string $payload): string
    {
        $builder = new CommonBuilder();
        $sanitizer = $builder->build();

        return $sanitizer->sanitize($payload);
    }
}
