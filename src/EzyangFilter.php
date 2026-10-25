<?php

namespace XssFilterCompatator;

use TYPO3\HtmlSanitizer\Builder\CommonBuilder;

class EzyangFilter extends FilterBase {

    protected string $package = 'ezyang/htmlpurifier';

    public function filter(string $payload): string
    {
        $purifier = new \HTMLPurifier();

        return $purifier->purify($payload);
    }
}
