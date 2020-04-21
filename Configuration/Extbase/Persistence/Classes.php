<?php

declare(strict_types=1);

/**
 * @link https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/10.0/Breaking-87623-ReplaceConfigpersistenceclassesTyposcriptConfiguration.html
 */
return [
    MyVendor\TestExtendingExtbase\Domain\Model\User::class => [
        'tableName' => 'fe_users',
        'properties' => [
            'testField' => [
                'fieldName' => 'tx_testfield'
            ],
        ],
    ],
    MyVendor\TestExtendingExtbase\Domain\Model\UserGroup::class => [
        'tableName' => 'fe_groups'
    ],
];
