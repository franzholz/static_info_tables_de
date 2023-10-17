<?php
namespace SJBR\StaticInfoTables\Domain\Model;

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

/**
* The Country model
*
*/
class Country extends AbstractEntity {
    /**
    * The German short name
    * @var string
    */
    protected $shortNameDe = '';

    /**
    * Sets the German short name.
    *
    * @param string $shortNameDe
    *
    * @return void
    */
    public function setShortNameDe($shortNameDe) {
        $this->shortNameDe = $shortNameDe;
    }

    /**
    * Gets the German short name.
    *
    * @return string
    */
    public function getShortNameDe() {
        return $this->shortNameDe;
    }
}
