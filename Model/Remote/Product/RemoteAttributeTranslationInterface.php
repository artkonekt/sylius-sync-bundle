<?php
/**
 * RemoteAttributeTranslationInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Product;


use Konekt\SyliusSyncBundle\Model\Translation\TranslationInterface;


interface RemoteAttributeTranslationInterface extends TranslationInterface
{

    /**
     * Set the attribute's name
     *
     * @param   string  $name
     */
    public function setName($name);

    /**
     * Returns the attribute's name
     *
     * @return string
     */
    public function getName();

}