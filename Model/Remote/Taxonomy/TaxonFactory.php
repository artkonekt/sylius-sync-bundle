<?php
/**
 * TaxonFactory.php
 *
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-29
 * @since       2016-02-29
 */

namespace Konekt\SyliusSyncBundle\Model\Remote\Taxonomy;


class TaxonFactory
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