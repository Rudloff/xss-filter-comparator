<?php

namespace XssFilterCompatator;

use Composer\InstalledVersions;

abstract class FilterBase
{

    protected string $package;

    public function getLabel(): string
    {
        return $this->package . ' ' . InstalledVersions::getPrettyVersion($this->package);
    }

    public abstract function filter(string $payload);

}
