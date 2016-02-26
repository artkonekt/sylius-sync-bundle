<?php
/**
 * Taxon.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Taxonomy;


use Konekt\SyliusSyncBundle\Model\Remote\Image\ImageableTrait;
use Konekt\SyliusSyncBundle\Model\Translation\TranslatableTrait;

class Taxon implements RemoteTaxonInterface
{
    use ImageableTrait;
    use TranslatableTrait;

    /** @var  string */
    protected $id;

    /** @var  RemoteTaxonomyInterface */
    protected $taxonomy;

    /**
     * Set the taxonomy the taxon belongs to
     *
     * @param RemoteTaxonomyInterface $taxonomy
     *
     * @return  static
     */
    public function setTaxonomy(RemoteTaxonomyInterface $taxonomy)
    {
        $this->taxonomy = $taxonomy;

        return $this;
    }

    /**
     * Returns the taxonomy the taxon belongs to
     *
     * @return RemoteTaxonomyInterface
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }

    /**
     * Set the taxon's id
     *
     * @param   string $id
     *
     * @return  static      Returns a reference to itself
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Returns the taxon's id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the actual translation class
     *
     * @return string
     */
    public function getTranslationClass()
    {
        return __NAMESPACE__ . '\\TaxonomyTranslation';
    }
}