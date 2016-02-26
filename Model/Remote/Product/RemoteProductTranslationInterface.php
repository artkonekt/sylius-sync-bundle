<?php
/**
 * RemoteProductTranslationInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Product;

use Konekt\SyliusSyncBundle\Model\Translation\TranslationInterface;


interface RemoteProductTranslationInterface extends TranslationInterface
{

    /**
     * Set the translation's name
     *
     * @param   string  $name
     */
    public function setName($name);

    /**
     * Returns the translation's name
     *
     * @return string
     */
    public function getName();


    /**
     * Set the translation's short description
     *
     * @param   string  $shortDescription
     */
    public function setShortDescription($shortDescription);

    /**
     * Returns the translation's short Description
     *
     * @return string
     */
    public function getShortDescription();

    /**
     * Set the translation's description
     *
     * @param   string  $description
     */
    public function setDescription($description);

    /**
     * Returns the translation's description
     *
     * @return string
     */
    public function getDescription();

}