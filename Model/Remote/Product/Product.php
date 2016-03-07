<?php
/**
 * Product.php
 *
 * @author      Attila Fulop
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-07
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Product;


use Konekt\SyliusSyncBundle\Model\Remote\Image\ImageableTrait;
use Konekt\SyliusSyncBundle\Model\Translation\TranslatableTrait;

class Product implements RemoteProductInterface
{
    use TranslatableTrait;
    use ImageableTrait;
    use SkuTrait;

    /** @var  int */
    protected $price;

    /** @var  int */
    protected $catalogPrice;

    /** @var array var */
    protected $taxons = [];

    /** @var RemoteAttributeInterface[] */
    protected $attributes = [];

    /**
     * Set the product's price
     *
     * @param   int $price
     *
     * @return  static  Returns a reference to itself
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Returns the product's price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the product's catalog price
     *
     * @param   int $catalogPrice
     *
     * @return  static  Returns a reference to itself
     */
    public function setCatalogPrice($catalogPrice)
    {
        $this->catalogPrice = $catalogPrice;

        return $this;
    }

    /**
     * Returns the product's catalog price
     *
     * @return int
     */
    public function getCatalogPrice()
    {
        return $this->catalogPrice;
    }

    /**
     * @inheritdoc
     */
    public function setTaxonIds(array $taxonIds)
    {
        $this->taxonIds = $taxonIds;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTaxonIds()
    {
        return $this->taxonIds;
    }

    /**
     * Returns the attributes set on the product
     *
     * @return RemoteAttributeInterface[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Returns an attribute by id/code
     *
     * @param   string  $id
     * @param   bool    $create     Whether or not to create an instance on the fly if it doesn't yet exists
     *
     * @return RemoteAttributeInterface|null
     */
    public function getAttribute($id, $create = false)
    {
        foreach ($this->attributes as $attribute) {
            if ($id == $attribute->getId()) {
                return $attribute;
            }
        }

        if ($create) {
            $attribute = new Attribute();
            $attribute->setId($id);
            $this->addAttribute($attribute);

            return $attribute;
        }

        return null;
    }

    /**
     * Add an attribute to the product
     *
     * @param RemoteAttributeInterface $attribute
     *
     * @return Product  Returns a reference to itself
     */
    public function addAttribute(RemoteAttributeInterface $attribute)
    {
        $this->attributes[] = $attribute;

        return $this;
    }

    /**
     * Returns the actual translation class
     *
     * @return string
     */
    public function getTranslationClass()
    {
        return __NAMESPACE__ . '\\ProductTranslation';
    }

}