<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FotoStation;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ThumbnailImage extends AbstractTag
{

    protected $Id = 3;

    protected $Name = 'ThumbnailImage';

    protected $FullName = 'FotoStation::Main';

    protected $GroupName = 'FotoStation';

    protected $g0 = 'FotoStation';

    protected $g1 = 'FotoStation';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = true;

    protected $Description = 'Thumbnail Image';

}
