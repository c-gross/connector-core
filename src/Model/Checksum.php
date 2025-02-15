<?php
/**
 * @copyright 2010-2015 JTL-Software GmbH
 * @package Jtl\Connector\Core\Model
 * @subpackage Product
 */

namespace Jtl\Connector\Core\Model;

use JMS\Serializer\Annotation as Serializer;
use Jtl\Connector\Core\Checksum\ChecksumInterface;

/**
 * @access public
 * @package Jtl\Connector\Core\Model
 * @subpackage Product
 * @Serializer\AccessType("public_method")
 */
class Checksum extends AbstractModel implements ChecksumInterface
{
    /**
     * @var int - Checksum used to check variations for change
     */
    const TYPE_VARIATION = 1;
    
    /**
     * @var Identity
     * @Serializer\Type("Jtl\Connector\Core\Model\Identity")
     * @Serializer\SerializedName("foreignKey")
     * @Serializer\Accessor(getter="getForeignKey",setter="setForeignKey")
     */
    protected $foreignKey = null;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("endpoint")
     * @Serializer\Accessor(getter="getEndpoint",setter="setEndpoint")
     */
    protected $endpoint = '';
    
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("hasChanged")
     * @Serializer\Accessor(getter="getHasChanged",setter="setHasChanged")
     */
    protected $hasChanged = false;
    
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("host")
     * @Serializer\Accessor(getter="getHost",setter="setHost")
     */
    protected $host = '';
    
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("type")
     * @Serializer\Accessor(getter="getType",setter="setType")
     */
    protected $type = 0;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->foreignKey = new Identity();
    }
    
    /**
     * @param Identity $foreignKey
     * @return Checksum
     */
    public function setForeignKey(Identity $foreignKey)
    {
        $this->foreignKey = $foreignKey;
        
        return $this;
    }
    
    /**
     * @return Identity
     */
    public function getForeignKey(): Identity
    {
        return $this->foreignKey;
    }
    
    /**
     * @param string $endpoint
     * @return Checksum
     */
    public function setEndpoint(string $endpoint)
    {
        $this->endpoint = $endpoint;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }
    
    /**
     * @param boolean $hasChanged
     * @return Checksum
     */
    public function setHasChanged(bool $hasChanged)
    {
        $this->hasChanged = $hasChanged;
        
        return $this;
    }
    
    /**
     * @return boolean
     */
    public function getHasChanged(): bool
    {
        return $this->hasChanged;
    }
    
    /**
     * @return boolean
     */
    public function hasChanged(): bool
    {
        return $this->hasChanged;
    }
    
    /**
     * @param string $host
     * @return Checksum
     */
    public function setHost(string $host)
    {
        $this->host = $host;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }
    
    /**
     * @param integer $type
     * @return Checksum
     */
    public function setType(int $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return integer
     */
    public function getType(): int
    {
        return $this->type;
    }
}
