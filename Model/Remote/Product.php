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
use Konekt\SyliusSyncBundle\Model\TranslationInterface;

class Product implements RemoteProductInterface
{


    /**
     * Returns the images assigned to the THING
     *
     * @return RemoteImageInterface[]
     */
    public function getImages()
    {
        // TODO: Implement getImages() method.
    }

    /**
     * Add a remote image to the THING
     *
     * @param RemoteImageInterface $image
     */
    public function addImage(RemoteImageInterface $image)
    {
        // TODO: Implement addImage() method.
    }

    /**
     * Set the product's sku
     *
     * @param   string $sku
     */
    public function setSku($sku)
    {
        // TODO: Implement setSku() method.
    }

    /**
     * Returns the product's sku
     *
     * @return string
     */
    public function getSku()
    {
        return "FASZ";
        // TODO: Implement getSku() method.
    }

    /**
     * Set the product's price
     *
     * @param   int $price
     */
    public function setPrice($price)
    {
        // TODO: Implement setPrice() method.
    }

    /**
     * Returns the product's price
     *
     * @return int
     */
    public function getPrice()
    {
        // TODO: Implement getPrice() method.
    }

    /**
     * Set the product's catalog price
     *
     * @param   int $catalogPrice
     */
    public function setCatalogPrice($catalogPrice)
    {
        // TODO: Implement setCatalogPrice() method.
    }

    /**
     * Returns the product's catalog price
     *
     * @return int
     */
    public function getCatalogPrice()
    {
        // TODO: Implement getCatalogPrice() method.
    }

    /**
     * Returns the attributes set on the product
     *
     * @return RemoteAttributeInterface[]
     */
    public function getAttributes()
    {
        // TODO: Implement getAttributes() method.
    }

    /**
     * Add an attribute to the product
     *
     * @param RemoteAttributeInterface $attribute
     */
    public function addAttribute(RemoteAttributeInterface $attribute)
    {
        // TODO: Implement addAttribute() method.
    }

    /**
     * Returns the translation in a given language
     *
     * @param   string $lang
     *
     * @return  TranslationInterface
     */
    public function getTranslation($lang)
    {
        // TODO: Implement getTranslation() method.
    }

    /**
     * Adds a new translation
     *
     * @param   TranslationInterface $translation
     *
     * @return  TranslationInterface
     */
    public function addTranslation(TranslationInterface $translation)
    {
        // TODO: Implement addTranslation() method.
    }
}