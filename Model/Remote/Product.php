<?php
/**
 * Product.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-25
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Remote;


use Konekt\SyliusSyncBundle\Model\RemoteAttributeInterface;
use Konekt\SyliusSyncBundle\Model\RemoteImageInterface;
use Konekt\SyliusSyncBundle\Model\RemoteProductInterface;
use Konekt\SyliusSyncBundle\Model\RemoteProductTranslationInterface;
use Konekt\SyliusSyncBundle\Model\TranslationInterface;

class Product implements RemoteProductInterface
{
    /** @var RemoteImageInterface[] */
    protected $images = [];

    /** @var  string */
    protected $sku;

    /** @var  int */
    protected $price;

    /** @var  int */
    protected $catalogPrice;

    /** @var RemoteAttributeInterface[] */
    protected $attributes = [];

    /** @var RemoteProductTranslationInterface[] */
    protected $translations = [];

    /**
     * Returns the images assigned to the THING
     *
     * @return RemoteImageInterface[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add a remote image to the THING
     *
     * @param RemoteImageInterface $image
     *
     * @return Product  Returns a reference to itself
     */
    public function addImage(RemoteImageInterface $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Set the product's sku
     *
     * @param   string $sku
     *
     * @return Product  Returns a reference to itself
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Returns the product's sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set the product's price
     *
     * @param   int $price
     *
     * @return Product  Returns a reference to itself
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
     * @return Product  Returns a reference to itself
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
     *
     * @return RemoteAttributeInterface|null
     */
    public function getAttribute($id)
    {
        foreach ($this->attributes as $attribute) {
            if ($id == $attribute->getId()) {
                return $attribute;
            }
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
     * Returns all the translations
     *
     * @return  TranslationInterface[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Returns the translation in a given language
     *
     * @param   string $lang
     *
     * @return  RemoteProductTranslationInterface|null
     */
    public function getTranslation($lang)
    {
        foreach ($this->translations as $translation) {
            if ($lang == $translation->getLang()) {
                return $translation;
            }
        }

        return null;
    }

    /**
     * Adds a new translation
     *
     * @param   TranslationInterface $translation
     *
     * @return  Product  Returns a reference to itself
     */
    public function addTranslation(TranslationInterface $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }
}