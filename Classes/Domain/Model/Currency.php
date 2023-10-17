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
* The Currency model
*
*/
class Currency extends AbstractEntity {
    /**
    * German name of the currency
    * @var string
    */
    protected $nameDe = '';

    /**
    * German name of the currency subdivision unit
    * @var string
    */
    protected $subdivisionNameDe = '';

    /**
    * Sets the German name of the currency
    *
    * @param string $nameDe
    *
    * @return void
    */
    public function setNameDe($nameDe) {
        $this->nameDe = $nameDe;
    }

    /**
    * Gets the German name of the currency
    *
    * @return string
    */
    public function getNameDe() {
        return $this->nameDe;
    }

    /**
    * Sets the German name of the currency subdivision
    *
    * @param string $subdivisionNameDe
    *
    * @return void
    */
    public function setSubdivisionNameDe($subdivisionNameDe) {
        $this->subdivisionNameDe = $subdivisionNameDe;
    }

    /**
    * Gets the German name of the currency subdivision
    *
    * @return string
    */
    public function getSubdivisionNameDe() {
        return $this->subdivisionNameDe;
    }
}
