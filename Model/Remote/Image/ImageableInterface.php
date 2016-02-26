<?php
/**
 * ImageableInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Image;


interface ImageableInterface
{
    /**
     * Returns the images assigned to the THING
     *
     * @return RemoteImageInterface[]
     */
    public function getImages();

    /**
     * Add a remote image to the THING
     *
     * @param RemoteImageInterface $image
     */
    public function addImage(RemoteImageInterface $image);

}