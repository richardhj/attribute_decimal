<?php

/**
 * This file is part of MetaModels/attribute_decimal.
 *
 * (c) 2012-2015 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage AttributeDecimal
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2012-2016 The MetaModels team.
 * @license    https://github.com/MetaModels/attribute_decimal/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

namespace MetaModels\Attribute\Decimal;

use MetaModels\Attribute\AbstractAttributeTypeFactory;

/**
 * Attribute type factory for decimal attributes.
 */
class AttributeTypeFactory extends AbstractAttributeTypeFactory
{
    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        parent::__construct();

        $this->typeName  = 'decimal';
        $this->typeIcon  = 'system/modules/metamodelsattribute_decimal/html/decimal.png';
        $this->typeClass = 'MetaModels\Attribute\Decimal\Decimal';
    }
}
