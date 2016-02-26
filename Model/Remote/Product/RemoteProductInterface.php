<?php
/**
 * RemoteProductInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Product;

use Konekt\SyliusSyncBundle\Model\Translation\TranslatableInterface;
use Konekt\SyliusSyncBundle\Model\Remote\Image\ImageableInterface;

interface RemoteProductInterface extends TranslatableInterface, ImageableInterface
{
    /**
     * Set the product's sku
     *
     * @param   string  $sku
     */
    public function setSku($sku);

    /**
     * Returns the product's sku
     *
     * @return string
     */
    public function getSku();


    /**
     * Set the product's price
     *
     * @param   int  $price
     */
    public function setPrice($price);

    /**
     * Returns the product's price
     *
     * @return int
     */
    public function getPrice();


    /**
     * Set the product's catalog price
     *
     * @param   int  $catalogPrice
     */
    public function setCatalogPrice($catalogPrice);

    /**
     * Returns the product's catalog price
     *
     * @return int
     */
    public function getCatalogPrice();


    /**
     * Returns the attributes set on the product
     *
     * @return RemoteAttributeInterface[]
     */
    public function getAttributes();


    /**
     * Returns an attribute by id/code
     *
     * @param   string  $id
     * @param   bool    $create     Whether or not to create an instance on the fly if it doesn't yet exists
     *
     * @return RemoteAttributeInterface|null
     */
    public function getAttribute($id, $create = false);


    /**
     * Add an attribute to the product
     *
     * @param RemoteAttributeInterface $attribute
     */
    public function addAttribute(RemoteAttributeInterface $attribute);

}