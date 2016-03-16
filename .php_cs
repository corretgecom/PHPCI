<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->path('PHPCI')
    ->in(__DIR__);

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers(['-phpdoc_params'])
    ->fixers(['-phpdoc_no_empty_return'])
    ->finder($finder);

