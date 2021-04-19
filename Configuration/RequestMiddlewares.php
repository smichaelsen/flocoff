<?php

return [
    'frontend' => [
        'smic/flocoff/addHeader' => [
            'target' => \Smic\Flocoff\Middleware\AddFlocOptOutHeader::class,
        ],
    ],
];
