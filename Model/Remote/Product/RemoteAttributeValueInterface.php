<?php
/**
 * Contains the RemoteAttributeValueInterface interface.
 *
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-08
 * @since       2016-03-08
 */

namespace Konekt\SyliusSyncBundle\Model\Remote\Product;

use Konekt\SyliusSyncBundle\Model\Translation\TranslatableInterface;

interface RemoteAttributeValueInterface extends TranslatableInterface
{
    /**
     * Set the attribute value's id
     *
     * @param   string  $id
     *
     * @return  static
     */
    public function setId($id);

    /**
     * Returns the attribute value's id
     *
     * @return string
     */
    public function getId();

}
