<?php
/**
 * TranslationInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Translation;


interface TranslationInterface
{
    /**
     * Set the translation's lang
     *
     * @param   string  $lang
     */
    public function setLang($lang);

    /**
     * Returns the translation's lang
     *
     * @return string
     */
    public function getLang();

}