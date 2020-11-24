<?php
defined('TYPO3_MODE') || die();

call_user_func(function($extensionKey) {
    // Deprecated since 10.0 @see https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/10.0/Breaking-87623-ReplaceConfigpersistenceclassesTyposcriptConfiguration.html
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extensionKey . '/Configuration/TypoScript/Extbase/setup.txt">'
    );
}, 'static_info_tables_de');
