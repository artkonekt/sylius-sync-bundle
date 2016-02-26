<?php
/**
 * ProductTranslation.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Product;

use Konekt\SyliusSyncBundle\Model\Translation\TranslationOfNameTrait;
use Konekt\SyliusSyncBundle\Model\Translation\TranslationTrait;

class ProductTranslation implements RemoteProductTranslationInterface
{
    use TranslationTrait;
    use TranslationOfNameTrait;

    /** @var  string */
    protected $shortDescription;

    /** @var  string */
    protected $description;

    /**
     * Set the translation's short description
     *
     * @param   string $shortDescription
     *
     * @return  static
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Returns the translation's short Description
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set the translation's description
     *
     * @param   string $description
     *
     * @return  static
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Returns the translation's description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}