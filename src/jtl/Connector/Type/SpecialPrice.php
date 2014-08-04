<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Type;

use \jtl\Connector\Type\PropertyInfo;

/**
 * @access public
 * @package jtl\Connector\Type
 */
class SpecialPrice extends DataType
{
    protected function loadProperties()
    {
        return array(
            new PropertyInfo('customerGroupId', 'Identity', null, True, false, false),
            new PropertyInfo('productSpecialPriceId', 'Identity', null, True, false, false),
            new PropertyInfo('priceNet', 'double', null, False, false, false),
        );
    }
}
