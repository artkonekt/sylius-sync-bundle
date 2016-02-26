<?php
/**
 * Attribute.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Product;


use Konekt\SyliusSyncBundle\Model\RemoteAttributeInterface;
use Konekt\SyliusSyncBundle\Model\Translation\TranslatableTrait;

class Attribute implements RemoteAttributeInterface
{
    use TranslatableTrait;

    /** @var  string */
    protected $id;

    /**
     * Set the attribute's id
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
     * Returns the attribute's id
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
        return __NAMESPACE__ . '\\AttributeTranslation';
    }

}