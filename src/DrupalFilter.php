<?php

namespace XssFilterCompatator;

use Drupal\Component\Utility\Xss;

class DrupalFilter extends FilterBase {

    protected string $package = 'drupal/core-utility';

    public function filter(string $payload): string
    {
        return Xss::filterAdmin($payload);
    }
}
