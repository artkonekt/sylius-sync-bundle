<?php
/**
 * Taxonomy.php
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

class Taxonomy implements RemoteTaxonomyInterface
{
    use ImageableTrait;
    use TranslatableTrait;

    /** @var  string */
    protected $id;

    /**
     * Set the taxonomy's id
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
     * Returns the taxonomy's id
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