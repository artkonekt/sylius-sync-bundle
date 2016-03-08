<?php
/**
 * AttributeTranslation.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-08
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Product;

use Konekt\SyliusSyncBundle\Model\Translation\TranslationOfNameTrait;
use Konekt\SyliusSyncBundle\Model\Translation\TranslationTrait;

class AttributeTranslation implements RemoteAttributeTranslationInterface
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