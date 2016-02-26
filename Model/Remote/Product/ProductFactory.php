<?php
/**
 * ProductFactory.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Product;


class ProductFactory
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