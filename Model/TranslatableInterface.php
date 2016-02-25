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
     * Returns all the translations
     *
     * @return  TranslationInterface[]
     */
    public function getTranslations();

    /**
     * Returns the translation in a given language
     *
     * @param   string  $lang
     *
     * @return  TranslationInterface|null
     */

    public function getTranslation($lang);

    /**
     * Adds a new translation
     *
     * @param   TranslationInterface  $translation
     */
    public function addTranslation(TranslationInterface $translation);

}