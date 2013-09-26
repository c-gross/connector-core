<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * DeliveryNote Model
 * @access public
 */
class DeliveryNote extends DataModel
{
    /**
     * @var int
     */
    protected $_id = 0;
    
    /**
     * @var int
     */
    protected $_customerOrderId = 0;
    
    /**
     * @var string
     */
    protected $_note = '';
    
    /**
     * @var string
     */
    protected $_created = '';
    
    /**
     * @var int
     */
    protected $_fulfillment = 0;
    
    /**
     * @var int
     */
    protected $_status = 0;
    
    /**
     * DeliveryNote Setter
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
            case "_customerOrderId":
            case "_fulfillment":
            case "_status":
            
                $this->$name = (int)$value;
                break;
        
            case "_note":
            case "_created":
            
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