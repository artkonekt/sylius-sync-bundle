<?php
/**
 * RemoteTaxonomyInterface.php
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

interface RemoteTaxonomyInterface extends TranslatableInterface, ImageableInterface
{
    /**
     * Set the taxonomy's id
     *
     * @param   string  $id
     */
    public function setId($id);

    /**
     * Returns the taxonomy's id
     *
     * @return string
     */
    public function getId();


    /**
     * Returns the top level taxons
     *
     * @return RemoteTaxonInterface[]
     */
    public function getTaxons();

    /**
     * Returns a taxon by id
     *
     * @param   string  $id
     *
     * @return RemoteTaxonInterface|null
     */
    public function findTaxon($id);

    /**
     * Add a new top level taxon to the taxonomy
     *
     * @param RemoteTaxonInterface $taxon
     */
    public function addTaxon(RemoteTaxonInterface $taxon);

}