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
* The Country Zone model
*/
class CountryZone extends AbstractEntity {
    /**
    * German name of the country zone
    * @var string
    */
    protected $nameDe = '';

    /**
    * Sets the German name.
    *
    * @param string $nameDe
    *
    * @return void
    */
    public function setNameDe($nameDe) {
        $this->nameDe = $nameDe;
    }

    /**
    * Returns German name. If empty returns the localName.
    *
    * @return string
    */
    public function getNameDe() {
        if ($this->nameDe === '') {
            return $this->getLocalName();
        }
        return $this->nameDe;
    }
}
