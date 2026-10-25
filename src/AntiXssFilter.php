<?php

namespace XssFilterCompatator;

use voku\helper\AntiXSS;

class AntiXssFilter extends FilterBase {

    protected string $package = 'voku/anti-xss';

    public function filter(string $payload): string
    {
        $antiXss = new AntiXSS();

        return $antiXss->xss_clean($payload);
    }
}
