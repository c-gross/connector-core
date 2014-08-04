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
class ConfigGroup extends DataType
{
    protected function loadProperties()
    {
        return array(
            new PropertyInfo('id', 'Identity', null, False, false, false),
            new PropertyInfo('comment', 'string', null, False, false, false),
            new PropertyInfo('imagePath', 'string', null, False, false, false),
            new PropertyInfo('maximumSelection', 'int', null, False, false, false),
            new PropertyInfo('minimumSelection', 'int', null, False, false, false),
            new PropertyInfo('sort', 'int', null, False, false, false),
            new PropertyInfo('type', 'int', null, False, false, false),
            new PropertyInfo('i18n', '\jtl\Connector\Model\ConfigGroupI18n', null, false, false, true),
        );
    }
}
