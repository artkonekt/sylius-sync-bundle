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
use Konekt\SyliusSyncBundle\Model\Tree\TreeNodeTrait;

class Taxon implements RemoteTaxonInterface
{
    use ImageableTrait;
    use TranslatableTrait;
    use TreeNodeTrait;

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
     * Find a child item by id
     *
     * @param   string  $id
     *
     * @return  RemoteTaxonInterface|null
     */
    public function findChild($id)
    {
        foreach ($this->getChildren() as $child) {
            $result = $this->findChildInNode($child, $id);

            if ($result) {
                return $result;
            }
        }

        return null;
    }

    /**
     * Returns the actual translation class
     *
     * @return string
     */
    public function getTranslationClass()
    {
        return __NAMESPACE__ . '\\TaxonTranslation';
    }

    /**
     * @param static    $node
     * @param string    $searchId
     *
     * @return mixed
     */
    private function findChildInNode($node, $searchId)
    {
        if ($searchId == $node->getId()) {
            return $node;
        }

        if ($node->hasChildren()) {
            foreach ($node->getChildren() as $child) {
                $result = $this->findChildInNode($child, $searchId);
                if ($result) {
                    return $result;
                }
            }
        }

        return null;
    }
}