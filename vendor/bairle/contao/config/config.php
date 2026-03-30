<?php

/*
 * This file is part of Stellenangebote.
 *
 * (c) Mathis Jakober <jakober@bairle.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/bairle/contao-bairle-stellenangebote-bundle
 */

use Bairle\ContaoBairleStellenangeboteBundle\Model\StellenangeboteModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['stellenangebote_management']['karriere_collection'] = array(
    'tables' => array('tl_stellenangebote')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_stellenangebote'] = StellenangeboteModel::class;
