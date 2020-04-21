<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "femanager"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'test_extending_extbase',
    'description' => '',
    'category' => 'plugin',
    'author' => '',
    'author_email' => '',
    'author_company' => '',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => ''
        ],
        'conflicts' => [],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'MyVendor\\TestExtendingExtbase\\' => 'Classes'
        ]
    ],
];
