<?php

declare(strict_types=1);

use Bairle\ContaoBairleStellenangeboteBundle\Controller\FrontendModule\KarriereListingController;
use Bairle\ContaoBairleStellenangeboteBundle\Controller\FrontendModule\StellenangeboteSingleController;

/**
 * Backend modules
 */
$GLOBALS['TL_LANG']['MOD']['stellenangebote_management'] = 'Stellenangebote';
$GLOBALS['TL_LANG']['MOD']['karriere_collection'] = ['Karriere', 'Stellenangebote verwalten'];

/**
 * Frontend modules
 */
// Das ist die Kategorie im Dropdown-Menü
$GLOBALS['TL_LANG']['FMD']['stellenangebote_list'] = 'Stellenangebote';

// Das ist das Listen-Modul
$GLOBALS['TL_LANG']['FMD'][KarriereListingController::TYPE] = ['Stellenangebot Liste', 'Zeigt eine Liste aller Stellenangebote an.'];

// Das ist das Leser-Modul (Single)
$GLOBALS['TL_LANG']['FMD'][StellenangeboteSingleController::TYPE] = ['Stellenangebot Leser', 'Zeigt die Details eines einzelnen Stellenangebots an.'];