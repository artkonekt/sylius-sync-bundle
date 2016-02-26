<?php
/**
 * RemoteTaxonInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Taxonomy;

use Konekt\SyliusSyncBundle\Model\Remote\Image\ImageableInterface;
use Konekt\SyliusSyncBundle\Model\Translation\TranslatableInterface;

interface RemoteTaxonInterface extends TranslatableInterface, ImageableInterface
{
    /**
     * Set the taxonomy the taxon belongs to
     *
     * @param RemoteTaxonomyInterface $taxonomy
     */
    public function setTaxonomy(RemoteTaxonomyInterface $taxonomy);


    /**
     * Returns the taxonomy the taxon belongs to
     *
     * @return RemoteTaxonomyInterface
     */
    public function getTaxonomy();

    /**
     * Set the taxon's id
     *
     * @param   string  $id
     */
    public function setId($id);

    /**
     * Returns the taxon's id
     *
     * @return string
     */
    public function getId();

}