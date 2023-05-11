<?php
defined('TYPO3') || die('Access denied.');

call_user_func(function($extensionKey, $table)
{
    $additionalFields = [
        'cu_name_en' => 'cu_name_de',
        'cu_sub_name_en' => 'cu_sub_name_de'
    ];
    foreach ($additionalFields as $sourceField => $destField) {
        $additionalColumns = [];
        $additionalColumns[$destField] = $GLOBALS['TCA'][$table]['columns'][$sourceField];
        $additionalColumns[$destField]['label'] = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:static_currencies_item.' . $destField;
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $additionalColumns);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($table, $destField, '', 'after:' . $sourceField);
        // Add as search field
        $GLOBALS['TCA'][$table]['ctrl']['searchFields'] .= ',' . $destField;
    }
}, 'static_info_tables_de', basename(__FILE__, '.php'));
