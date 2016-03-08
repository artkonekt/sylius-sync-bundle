<?php
/**
 * Contains the IdTrait trait.
 *
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-08
 * @since       2016-03-08
 */

namespace Konekt\SyliusSyncBundle\Model\Remote\Product;

trait IdTrait
{

    /** @var string */
    protected $id;

    /**
     * Returns the ID of the model.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the ID of the model.
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}
