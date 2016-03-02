<?php
/**
 * Contains the SkuTrait trait.
 *
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-02
 * @since       2016-03-02
 */

namespace Konekt\SyliusSyncBundle\Model\Remote\Product;

trait SkuTrait
{
    /** @var string */
    protected $sku;

    /**
     * Returns the SKU assigned to the THING.
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Sets the SKU of the THING.
     *
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

}
