<?php

namespace XssFilterComparator;

use Rhukster\DomSanitizer\DOMSanitizer;

class RhuksterFilter extends FilterBase {

    protected string $package = 'rhukster/dom-sanitizer';

    public function filter(string $payload): string
    {
        $sanitizer = new DOMSanitizer();

        return $sanitizer->sanitize($payload);
    }
}
