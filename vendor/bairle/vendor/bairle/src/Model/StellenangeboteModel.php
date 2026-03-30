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

namespace Bairle\ContaoBairleStellenangeboteBundle\Model;

use Contao\Model;

class StellenangeboteModel extends Model
{
    protected static $strTable = 'tl_stellenangebote';
}
