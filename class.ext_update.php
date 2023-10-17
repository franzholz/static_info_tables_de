<?php
namespace SJBR\StaticInfoTablesDe;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

/**
 * Class for updating the db
 */
class ext_update
{
	/**
	 * Main function, returning the HTML content
	 *
	 * @return string HTML
	 */
	public function main()
	{
		$content = '';
		$objectManager = GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');

		// Clear the class cache
		$classCacheManager = $objectManager->get('SJBR\\StaticInfoTables\\Cache\\ClassCacheManager');
		$classCacheManager->reBuild();

		// Update the database
		$databaseUpdateUtility = $objectManager->get('SJBR\\StaticInfoTables\\Utility\\DatabaseUpdateUtility');
		$databaseUpdateUtility->doUpdate('static_info_tables_de');

		$content.= '<p>' . LocalizationUtility::translate('updateLanguageLabels', 'StaticInfoTables', ['static_info_tables_de']) . '</p>';
		return $content;
	}

	public function access()
	{
		return true;
	}
}
