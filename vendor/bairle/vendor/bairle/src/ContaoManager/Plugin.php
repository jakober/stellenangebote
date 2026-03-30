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

namespace Bairle\ContaoBairleStellenangeboteBundle\ContaoManager;

use Bairle\ContaoBairleStellenangeboteBundle\BairleContaoBairleStellenangeboteBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(BairleContaoBairleStellenangeboteBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
