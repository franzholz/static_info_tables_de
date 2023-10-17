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
* The Territory model
*
*/
class Territory extends AbstractEntity {
    /**
    * German name of the territory
    * @var string
    */
    protected $nameDe = '';

    /**
    * Sets the German name of the territory
    *
    * @param string $nameDe
    *
    * @return void
    */
    public function setNameDe($nameDe) {
        $this->nameDe = $nameDe;
    }

    /**
    * Returns the German name of the territory
    *
    * @return string
    */
    public function getNameDe() {
        return $this->nameDe;
    }
}
