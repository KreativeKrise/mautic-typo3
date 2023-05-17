<?php

declare(strict_types=1);
namespace Bitmotion\Mautic\Domain\Model\Dto;

/***
 *
 * This file is part of the "Mautic" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2023 Leuchtfeuer Digital Marketing <dev@leuchtfeuer.com>
 *
 ***/

/**
 * @deprecated Use YamlConfiguration instead.
 */
class EmConfiguration extends YamlConfiguration
{
    public function __construct()
    {
        parent::__construct();

        trigger_error('Use YamlConfiguration instead.', E_USER_DEPRECATED);
    }
}
