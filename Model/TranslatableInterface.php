<?php
/**
 * TranslatableInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-25
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model;


interface TranslatableInterface
{
    /**
     * Returns the translation in a given language
     *
     * @param   string  $lang
     *
     * @return  TranslationInterface
     */

    public function getTranslation($lang);

    /**
     * Adds a new translation
     *
     * @param   TranslationInterface  $translation
     *
     * @return  TranslationInterface
     */
    public function addTranslation(TranslationInterface $translation);

}