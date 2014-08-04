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
class CustomerOrderAttr extends DataType
{
    protected function loadProperties()
    {
        return array(
            new PropertyInfo('customerOrderId', 'Identity', null, False, false, false),
            new PropertyInfo('id', 'Identity', null, True, false, false),
            new PropertyInfo('key', 'string', null, False, false, false),
            new PropertyInfo('value', 'string', null, False, false, false),
        );
    }
}
