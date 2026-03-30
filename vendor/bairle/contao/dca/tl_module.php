<?php

declare(strict_types=1);

use Bairle\ContaoBairleStellenangeboteBundle\Controller\FrontendModule\KarriereListingController;
use Bairle\ContaoBairleStellenangeboteBundle\Controller\FrontendModule\StellenangeboteSingleController;

/**
 * Frontend modules
 */
$GLOBALS['TL_DCA']['tl_module']['palettes'][KarriereListingController::TYPE] = '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';

$GLOBALS['TL_DCA']['tl_module']['palettes'][StellenangeboteSingleController::TYPE] = '{title_legend},name,headline,type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},cssID';