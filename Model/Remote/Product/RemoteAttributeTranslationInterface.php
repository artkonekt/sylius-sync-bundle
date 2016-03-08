<?php
/**
 * RemoteAttributeTranslationInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-08
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Product;


use Konekt\SyliusSyncBundle\Model\Translation\TranslationInterface;


interface RemoteAttributeTranslationInterface extends TranslationInterface
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