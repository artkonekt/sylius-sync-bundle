<?php
/**
 * Contains the Attribute class.
 *
 * @author      Attila Fulop
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-08
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Product;

use Konekt\SyliusSyncBundle\Model\Translation\TranslatableTrait;

class Attribute implements RemoteAttributeInterface
{
    use TranslatableTrait;
    use IdTrait;

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