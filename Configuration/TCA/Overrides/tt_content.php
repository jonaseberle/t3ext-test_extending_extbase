<?php

defined('TYPO3_MODE') or die();

(static function ($_EXTKEY = 'test_extending_extbase') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        $_EXTKEY,
        'Pi1',
        'Test: ' . $_EXTKEY
    );
})();
