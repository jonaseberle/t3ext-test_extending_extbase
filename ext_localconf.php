<?php

defined('TYPO3_MODE') || die('Access denied.');

(static function ($_EXTKEY = 'test_extending_extbase') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        '
        page >
        page = PAGE
        page.25674 = USER_INT
        page.25674 {
            userFunc = TYPO3\CMS\Extbase\Core\Bootstrap->run
            extensionName = TestExtendingExtbase
            vendorName = MyVendor
            pluginName = Pi1
        }'
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'MyVendor.TestExtendingExtbase',
        'Pi1',
        [
            'User' => 'list',
        ],
        [
            'User' => 'list',
        ]
    );

//    # https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/9.5/Deprecation-86270-ExtbaseXclassViaTypoScriptSettings.html
//    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
//        \TYPO3\CMS\Extbase\Object\Container\Container::class
//    )
//        ->registerImplementation(
//            \MyVendor\TestExtendingExtbase\Domain\Model\User::class,
//            \TYPO3\CMS\Extbase\Domain\Model\FrontendUser::class
//        );
})();
