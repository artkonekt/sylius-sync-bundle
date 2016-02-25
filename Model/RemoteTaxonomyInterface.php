<?php
/**
 * RemoteTaxonomyInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-25
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model;


interface RemoteTaxonomyInterface extends TranslatableInterface, ImageableInterface
{
    /**
     * Set the taxonomy's id
     *
     * @param   string  $id
     */
    public function setId($id);

    /**
     * Returns the taxonomy's id
     *
     * @return string
     */
    public function getId();

    /**
     * Returns the taxonomy translation in a given language
     *
     * @param   string  $lang
     *
     * @return TaxonomyTranslationInterface
     */

}