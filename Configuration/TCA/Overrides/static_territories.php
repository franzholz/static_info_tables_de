<?php
defined('TYPO3_MODE') or die();

$additionalFields = array(
	'tr_name_en' => 'tr_name_de'
);
foreach ($additionalFields as $sourceField => $destField) {
	$additionalColumns = array();
	$additionalColumns[$destField] = $GLOBALS['TCA']['static_territories']['columns'][$sourceField];
	$additionalColumns[$destField]['label'] = 'LLL:EXT:static_info_tables_de/Resources/Private/Language/locallang_db.xlf:static_territories_item.' . $destField;
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('static_territories', $additionalColumns);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('static_territories', $destField, '', 'after:' . $sourceField);
	// Add as search field
	$GLOBALS['TCA']['static_territories']['ctrl']['searchFields'] .= ',' . $destField;
}
unset($additionalColumns);
unset($additionalFields);