<?php

use XssFilterCompatator\AntiXssFilter;
use XssFilterCompatator\DrupalFilter;
use XssFilterCompatator\EzyangFilter;
use XssFilterCompatator\HtmlawedFilter;
use XssFilterCompatator\RhuksterFilter;
use XssFilterCompatator\SymfonyFilter;
use XssFilterCompatator\Typo3Filter;

require __DIR__ . '/vendor/autoload.php';

assert(isset($config));
$config->addDictionary('dict');
$config->setTarget(function (string $input) {
    $filters = [
        new DrupalFilter(),
        new SymfonyFilter(),
        new HtmlawedFilter(),
        new Typo3Filter(),
        new AntiXssFilter(),
        new RhuksterFilter(),
        new EzyangFilter(),
    ];

    foreach ($filters as $filter) {
        $filter->filter($input);
    }
});
