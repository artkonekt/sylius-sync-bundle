<?php
/**
 * RemoteAttributeInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-25
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model;


interface RemoteAttributeInterface extends TranslatableInterface
{
    /**
     * Set the attribute's id
     *
     * @param   string  $id
     */
    public function setId($id);

    /**
     * Returns the attribute's id
     *
     * @return string
     */
    public function getId();


}