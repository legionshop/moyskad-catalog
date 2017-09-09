<?php

include __DIR__ . '/MoySkladICMLParser.php';

// configure
$parser = new MoySkladICMLParser(
    'admin@penformen',
    'psecretn',
    'shop1',
    array(
        'directory' => __DIR__,
        'file' => 'catalog.xml',
    )
);

// generate
$parser->generateICML();
