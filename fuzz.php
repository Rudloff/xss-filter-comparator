<?php

use XssFilterComparator\AntiXssFilter;
use XssFilterComparator\DrupalFilter;
use XssFilterComparator\EzyangFilter;
use XssFilterComparator\HtmlawedFilter;
use XssFilterComparator\RhuksterFilter;
use XssFilterComparator\SymfonyFilter;
use XssFilterComparator\Typo3Filter;

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
