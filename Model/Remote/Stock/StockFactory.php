<?php
/**
 * Contains the StockFactory class.
 *
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-02
 * @since       2016-03-02
 */

namespace Konekt\SyliusSyncBundle\Model\Remote\Stock;


class StockFactory
{
    /**
     * @var string
     */
    private $className;

    /**
     * @param $className
     */
    public function __construct($className)
    {
        $this->className = $className;
    }

    public function create()
    {
        return new $this->className();
    }

}