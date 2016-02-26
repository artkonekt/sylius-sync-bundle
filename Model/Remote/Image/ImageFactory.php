<?php
/**
 * ImageFactory.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Image;


class ImageFactory
{
    /**
     * Creates a new remote image instance based on it's url
     *
     * @param   string      $url
     *
     * @return  RemoteImageInterface
     */
    public function createFromUrl($url)
    {
        $result = new Image();
        $result->setLocation($url);

        return $result;
    }

    /**
     * Creates a new remote image instance based on a local file
     *
     * @param   string      $file
     *
     * @return  RemoteImageInterface
     */
    public function createFromFile($file)
    {
        return $this->createFromUrl($file);
    }

}