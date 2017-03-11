<?php
defined('TYPO3_MODE') or die();

$additionalFields = array(
	'cn_short_en' => 'cn_short_de'
);
foreach ($additionalFields as $sourceField => $destField) {
	$additionalColumns = array();
	$additionalColumns[$destField] = $GLOBALS['TCA']['static_countries']['columns'][$sourceField];
	$additionalColumns[$destField]['label'] = 'LLL:EXT:static_info_tables_de/Resources/Private/Language/locallang_db.xlf:static_countries_item.' . $destField;
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('static_countries', $additionalColumns);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('static_countries', $destField, '', 'after:' . $sourceField);
	// Add as search field
	$GLOBALS['TCA']['static_countries']['ctrl']['searchFields'] .= ',' . $destField;
}
unset($additionalColumns);
unset($additionalFields);