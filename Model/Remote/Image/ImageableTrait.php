<?php
/**
 * ImageableTrait.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Image;


trait ImageableTrait
{
    /** @var RemoteImageInterface[] */
    protected $images = [];

    /**
     * Returns the images assigned to the THING
     *
     * @return RemoteImageInterface[]
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add a remote image to the THING
     *
     * @param RemoteImageInterface $image
     *
     * @return static    Returns a reference to itself
     */
    public function addImage(RemoteImageInterface $image)
    {
        $this->images[] = $image;

        return $this;
    }
}