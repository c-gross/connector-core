<?php
/**
 * @copyright 2010-2015 JTL-Software GmbH
 * @package Jtl\Connector\Core\Model
 * @subpackage Product
 */

namespace Jtl\Connector\Core\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Manufacturer / brand properties.
 *
 * @access public
 * @package Jtl\Connector\Core\Model
 * @subpackage Product
 * @Serializer\AccessType("public_method")
 */
class Manufacturer extends AbstractIdentity
{

    /**
     * @var string Manufacturer (brand) name
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     * @Serializer\Accessor(getter="getName",setter="setName")
     */
    protected $name = '';
    
    /**
     * @var integer Optional sort number
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("sort")
     * @Serializer\Accessor(getter="getSort",setter="setSort")
     */
    protected $sort = 0;
    
    /**
     * @var string Optional url path e.g. 'Products-manufactured-by-X'
     * @Serializer\Type("string")
     * @Serializer\SerializedName("urlPath")
     * @Serializer\Accessor(getter="getUrlPath",setter="setUrlPath")
     */
    protected $urlPath = '';
    
    /**
     * @var string Optional manufacturer website URL
     * @Serializer\Type("string")
     * @Serializer\SerializedName("websiteUrl")
     * @Serializer\Accessor(getter="getWebsiteUrl",setter="setWebsiteUrl")
     */
    protected $websiteUrl = '';
    
    /**
     * @var ManufacturerI18n[]
     * @Serializer\Type("array<Jtl\Connector\Core\Model\ManufacturerI18n>")
     * @Serializer\SerializedName("i18ns")
     * @Serializer\AccessType("reflection")
     */
    protected $i18ns = [];

    /**
     * @param string $name Manufacturer (brand) name
     * @return Manufacturer
     */
    public function setName(string $name): self
    {
        $this->setIdentificationStringBySubject('name', sprintf('Name = %s', $name));
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return string Manufacturer (brand) name
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @param integer $sort Optional sort number
     * @return Manufacturer
     */
    public function setSort(int $sort): self
    {
        $this->sort = $sort;
        
        return $this;
    }
    
    /**
     * @return integer Optional sort number
     */
    public function getSort(): int
    {
        return $this->sort;
    }
    
    /**
     * @param string $urlPath Optional url path e.g. 'Products-manufactured-by-X'
     * @return Manufacturer
     */
    public function setUrlPath(string $urlPath): self
    {
        $this->urlPath = $urlPath;
        
        return $this;
    }
    
    /**
     * @return string Optional url path e.g. 'Products-manufactured-by-X'
     */
    public function getUrlPath(): string
    {
        return $this->urlPath;
    }
    
    /**
     * @param string $websiteUrl Optional manufacturer website URL
     * @return Manufacturer
     */
    public function setWebsiteUrl(string $websiteUrl): self
    {
        $this->websiteUrl = $websiteUrl;
        
        return $this;
    }
    
    /**
     * @return string Optional manufacturer website URL
     */
    public function getWebsiteUrl(): string
    {
        return $this->websiteUrl;
    }
    
    /**
     * @param ManufacturerI18n $i18n
     * @return Manufacturer
     */
    public function addI18n(ManufacturerI18n $i18n): self
    {
        $this->i18ns[] = $i18n;
        
        return $this;
    }

    /**
     * @param ManufacturerI18n ...$i18ns
     * @return Manufacturer
     */
    public function setI18ns(ManufacturerI18n ...$i18ns): self
    {
        $this->i18ns = $i18ns;
        
        return $this;
    }
    
    /**
     * @return ManufacturerI18n[]
     */
    public function getI18ns(): array
    {
        return $this->i18ns;
    }
    
    /**
     * @return Manufacturer
     */
    public function clearI18ns(): self
    {
        $this->i18ns = [];
        
        return $this;
    }
}
