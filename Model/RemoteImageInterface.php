<?php
/**
 * RemoteImageInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-25
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model;


interface RemoteImageInterface
{
    /**
     * Set the image's location
     *
     * @param   string  $location
     */
    public function setLocation($location);

    /**
     * Returns the image's location
     *
     * @return string
     */
    public function getLocation();


    /**
     * Set the image's data
     *
     * @param   string  $data
     */
    public function setData($data);

    /**
     * Returns the image's data
     *
     * @return string
     */
    public function getData();

}