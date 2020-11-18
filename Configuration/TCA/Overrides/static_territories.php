<?php
defined('TYPO3_MODE') || die();

call_user_func(function($extensionKey, $table) {
    $additionalFields = array(
        'tr_name_en' => 'tr_name_de'
    );
    foreach ($additionalFields as $sourceField => $destField) {
        $additionalColumns = array();
        $additionalColumns[$destField] = $GLOBALS['TCA'][$table]['columns'][$sourceField];
        $additionalColumns[$destField]['label'] = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:static_territories_item.' . $destField;
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $additionalColumns);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($table, $destField, '', 'after:' . $sourceField);
        // Add as search field
        $GLOBALS['TCA'][$table]['ctrl']['searchFields'] .= ',' . $destField;
    }
}, 'static_info_tables_de', basename(__FILE__, '.php'));
