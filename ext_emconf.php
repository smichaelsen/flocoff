<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'FLoc off',
    'description' => 'Sends a FLoC opt out header in each web page response',
    'category' => 'frontend',
    'author' => 'Sebastian Michaelsen',
    'author_email' => 'sebastian@michaelsen.io',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.99.99',
        ],
    ],
];
