<?php
/**
 * TranslationOfNameTrait.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Translation;

/**
 * Utility trait, since the name field is translated in most of the entities
 */
trait TranslationOfNameTrait
{
    /** @var  string */
    protected $name;

    /**
     * Set the item's name
     *
     * @param   string $name
     *
     * @return  static
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Returns the item's name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}