<?php
defined('TYPO3_MODE') or die();

$additionalFields = array(
	'lg_name_en' => 'lg_name_de'
);
foreach ($additionalFields as $sourceField => $destField) {
	$additionalColumns = array();
	$additionalColumns[$destField] = $GLOBALS['TCA']['static_languages']['columns'][$sourceField];
	$additionalColumns[$destField]['label'] = 'LLL:EXT:static_info_tables_de/Resources/Private/Language/locallang_db.xlf:static_languages_item.' . $destField;
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('static_languages', $additionalColumns);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('static_languages', $destField, '', 'after:' . $sourceField);
	// Add as search field
	$GLOBALS['TCA']['static_languages']['ctrl']['searchFields'] .= ',' . $destField;
}
unset($additionalColumns);
unset($additionalFields);