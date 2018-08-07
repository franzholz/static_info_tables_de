<?php
defined('TYPO3_MODE') or die();

$tablename = 'static_languages';
$additionalFields = array(
    'lg_name_en' => 'lg_name_de'
);
foreach ($additionalFields as $sourceField => $destField) {
    $additionalColumns = array();
    $additionalColumns[$destField] = $GLOBALS['TCA'][$tablename]['columns'][$sourceField];
    $additionalColumns[$destField]['label'] = 'LLL:EXT:static_info_tables_de/Resources/Private/Language/locallang_db.xlf:static_languages_item.' . $destField;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($tablename, $additionalColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($tablename, $destField, '', 'after:' . $sourceField);
    // Add as search field
    $GLOBALS['TCA'][$tablename]['ctrl']['searchFields'] .= ',' . $destField;
}
unset($additionalColumns);
unset($additionalFields);
