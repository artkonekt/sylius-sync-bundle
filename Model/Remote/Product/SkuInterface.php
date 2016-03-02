<?php
/**
 * Contains the SkuInterface interface.
 *
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-02
 * @since       2016-03-02
 */

namespace Konekt\SyliusSyncBundle\Model\Remote\Product;

interface SkuInterface
{
    /**
     * Returns the SKU assigned to the THING.
     *
     * @return string
     */
    public function getSku();

    /**
     * Sets the SKU of the THING.
     *
     * @param string $sku
     */
    public function setSku($sku);

}