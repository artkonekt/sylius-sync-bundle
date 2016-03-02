<?php
/**
 * Contains the RemoteStockInterface interface.
 *
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-02
 * @since       2016-03-02
 */

namespace Konekt\SyliusSyncBundle\Model\Remote\Stock;

use Konekt\SyliusSyncBundle\Model\Remote\Product\SkuInterface;

interface RemoteStockInterface extends SkuInterface
{

    /**
     * Returns the stock's quantity.
     *
     * @return   int
     */
    public function getQuantity();

    /**
     * Set the stock's quantity.
     *
     * @param   int  $quantity
     */
    public function setQuantity($quantity);

}
