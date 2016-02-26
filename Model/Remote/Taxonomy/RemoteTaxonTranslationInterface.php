<?php
/**
 * RemoteTaxonTranslationInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-25
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model;


interface RemoteTaxonTranslationInterface extends TranslatableInterface
{
    /**
     * Set the taxon's name
     *
     * @param   string  $name
     */
    public function setName($name);

    /**
     * Returns the taxon's name
     *
     * @return string
     */
    public function getName();

}