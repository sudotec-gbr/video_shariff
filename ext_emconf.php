<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Video shariff',
    'description' => 'This extension provides more privacy when embedding videos in frontend.',
    'category' => 'plugin',
    'state' => 'stable',
    'author' => 'Pascal Rinker',
    'author_email' => 'projects@jweiland.net',
    'author_company' => 'jweiland.net',
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'fluid_styled_content' => '10.4.0-0.0.0'
        ],
        'conflicts' => [],
        'suggests' => [],
    ]
];
