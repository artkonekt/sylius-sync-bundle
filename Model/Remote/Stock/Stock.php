<?php
/**
 * Contains the Stock class.
 *
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-02
 * @since       2016-03-02
 */
namespace Konekt\SyliusSyncBundle\Model\Remote\Stock;

use Konekt\SyliusSyncBundle\Model\Remote\Product\SkuTrait;

class Stock implements RemoteStockInterface
{

    use SkuTrait;

    /** @var  int */
    private $quantity;

    /**
     * @inheritdoc
     *
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @inheritdoc
     *
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

}
