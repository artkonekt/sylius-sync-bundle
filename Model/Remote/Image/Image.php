<?php
/**
 * Image.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Image;


class Image implements RemoteImageInterface
{
    /** @var  string */
    protected $location;

    /** @var  string */
    protected $data;

    /**
     * Set the image's location
     *
     * @param   string $location
     *
     * @return  static
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Returns the image's location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the image's data
     *
     * @param   string $data
     *
     * @return  static
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Returns the image's data
     *
     * @return string
     */
    public function getData()
    {
        if (!$this->data && $this->getLocation()) {
            $this->data = file_get_contents($this->getLocation());
        }

        return $this->data;
    }
}
