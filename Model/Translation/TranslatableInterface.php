<?php
/**
 * TranslatableInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Translation;


interface TranslatableInterface
{
    /**
     * Returns the actual translation class
     *
     * @return string
     */
    public function getTranslationClass();

    /**
     * Returns all the translations
     *
     * @return  TranslationInterface[]
     */
    public function getTranslations();

    /**
     * Returns the translation in a given language
     *
     * @param   string  $lang       The language code (eg. 'en')
     * @param   bool    $create     Whether or not to create if it doesn't exists
     *
     * @return  TranslationInterface|null
     */

    public function getTranslation($lang, $create = false);

    /**
     * Adds a new translation
     *
     * @param   TranslationInterface  $translation
     */
    public function addTranslation(TranslationInterface $translation);

}