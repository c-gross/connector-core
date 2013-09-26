<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * ProductVariationValue Model
 * @access public
 */
class ProductVariationValue extends DataModel
{
    /**
     * @var int
     */
    protected $_id = 0;
    
    /**
     * @var int
     */
    protected $_productVariationId = 0;
    
    /**
     * @var double
     */
    protected $_extraWeight = 0.0;
    
    /**
     * @var string
     */
    protected $_sku = '';
    
    /**
     * @var int
     */
    protected $_sort = 0;
    
    /**
     * @var double
     */
    protected $_stockLevel = 0.0;
    
    /**
     * @var double
     */
    protected $_packagingUnitId = 1.0;
    
    /**
     * ProductVariationValue Setter
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        if ($value === null) {
            $this->$name = null;
            return;
        }
        
        switch ($name) {
            case "_id":
            case "_productVariationId":
            case "_sort":
            
                $this->$name = (int)$value;
                break;
        
            case "_extraWeight":
            case "_stockLevel":
            case "_packagingUnitId":
            
                $this->$name = (double)$value;
                break;
        
            case "_sku":
            
                $this->$name = (string)$value;
                break;
        
        }
    }
    
    /**
     * (non-PHPdoc)
     * @see \jtl\Core\Model\DataModel::map()
     */ 
    public function map($toWawi = false, \stdClass $obj = null)
    {
    
    }
}
?>