<?php
defined('TYPO3_MODE') || die();

call_user_func(function($extensionKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extensionKey . '/Configuration/TypoScript/Extbase/setup.txt">'
    );
}, 'static_info_tables_de');
