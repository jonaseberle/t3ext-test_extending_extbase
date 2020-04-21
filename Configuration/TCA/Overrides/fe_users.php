<?php

(static function ($_EXTKEY = 'test_extending_extbase') {
    /**
     * fe_users
     */
    $feUsersColumns = [
        'tx_testfield' => [
            'exclude' => 1,
            'label' => 'testfield',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ]
        ],
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'fe_users',
        $feUsersColumns
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'fe_users',
        '--div--;LLL:EXT:femanager/Resources/Private/Language/locallang_db.xlf:fe_users.tab, '
        . implode(',', array_keys($feUsersColumns))
    );
})();
