<?php
/**
 * Contains the AttributeValueTranslation class.
 *
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-08
 * @since       2016-03-08
 */

namespace Konekt\SyliusSyncBundle\Model\Remote\Product;

use Konekt\SyliusSyncBundle\Model\Translation\TranslationOfNameTrait;
use Konekt\SyliusSyncBundle\Model\Translation\TranslationTrait;

class AttributeValueTranslation implements RemoteAttributeValueTranslationInterface
{
    use TranslationTrait;

    /** @var  string */
    protected $value;

    /**
     * @inheritdoc
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getValue()
    {
        return $this->value;
    }

}
