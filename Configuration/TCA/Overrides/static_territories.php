<?php
defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(function($extensionKey, $table)
{
    $additionalFields = [
        'tr_name_en' => 'tr_name_de'
    ];
    foreach ($additionalFields as $sourceField => $destField) {
        $additionalColumns = [];
        $additionalColumns[$destField] = $GLOBALS['TCA'][$table]['columns'][$sourceField];
        $additionalColumns[$destField]['label'] = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:static_territories_item.' . $destField;
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $additionalColumns);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($table, $destField, '', 'after:' . $sourceField);
        $typo3Version = GeneralUtility::makeInstance(Typo3Version::class);

        if ($typo3Version->getMajorVersion() < 14) {
            // Add as search field
            $GLOBALS['TCA'][$table]['ctrl']['searchFields'] .= ',' . $destField;
        }
    }
}, 'static_info_tables_de', basename(__FILE__, '.php'));
