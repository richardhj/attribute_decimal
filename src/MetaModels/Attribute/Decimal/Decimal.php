<?php
/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 *
 * @package     MetaModels
 * @subpackage  AttributeDecimal
 * @author      Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author      Andreas Isaak <andy.jared@googlemail.com>
 * @author      Cliff Parnitzky <github@cliff-parnitzky.de>
 * @copyright   The MetaModels team.
 * @license     LGPL.
 * @filesource
 */

namespace MetaModels\Attribute\Decimal;

use MetaModels\Attribute\BaseSimple;

/**
 * This is the MetaModelAttribute class for handling text fields.
 *
 * @package    MetaModels
 * @subpackage AttributeDecimal
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 */
class Decimal extends BaseSimple
{
    /**
     * {@inheritDoc}
     */
    public function getSQLDataType()
    {
        return 'double NULL default NULL';
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeSettingNames()
    {
        return array_merge(
            parent::getAttributeSettingNames(),
            array(
                'mandatory',
                'filterable',
                'searchable',
            )
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldDefinition($arrOverrides = array())
    {
        $arrFieldDef = parent::getFieldDefinition($arrOverrides);

        $arrFieldDef['inputType']    = 'text';
        $arrFieldDef['eval']['rgxp'] = 'digit';

        return $arrFieldDef;
    }
}
