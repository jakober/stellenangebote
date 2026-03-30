<?php

declare(strict_types=1);

/*
 * This file is part of Stellenangebote.
 *
 * (c) Mathis Jakober <jakober@bairle.de>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/bairle/contao-bairle-stellenangebote-bundle
 */

use Bairle\ContaoBairleStellenangeboteBundle\Controller\FrontendModule\KarriereListingController;

/**
 * Backend modules
 */
$GLOBALS['TL_LANG']['MOD']['stellenangebote_management'] = 'Stellenangebote';
$GLOBALS['TL_LANG']['MOD']['karriere_collection'] = ['Karriere', 'Stellenangebote verwalten'];

/**
 * Frontend modules
 */
$GLOBALS['TL_LANG']['FMD']['stellenangebote_list'] = 'Stellenangebot Liste';
$GLOBALS['TL_LANG']['FMD'][KarriereListingController::TYPE] = ['Karriere', 'Stellenangebote'];
