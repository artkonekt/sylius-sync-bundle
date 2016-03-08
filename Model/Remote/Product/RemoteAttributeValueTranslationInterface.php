<?php
/**
 * Contains RemoteAttributeValueTranslationInterface interface.
 *
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-08
 * @since       2016-03-08
 */

namespace Konekt\SyliusSyncBundle\Model\Remote\Product;

use Konekt\SyliusSyncBundle\Model\Translation\TranslationInterface;

interface RemoteAttributeValueTranslationInterface extends TranslationInterface
{

    /**
     * Set the attribute's value
     *
     * @param   string  $value
     */
    public function setValue($value);

    /**
     * Returns the attribute's value.
     *
     * @return string
     */
    public function getValue();

}
