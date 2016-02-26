<?php
/**
 * TranslatableTrait.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Translation;


trait TranslatableTrait
{
    /** @var TranslationInterface[] */
    protected $translations = [];


    /**
     * Returns the actual translation class
     *
     * @return string
     */
    abstract public function getTranslationClass();

    /**
     * Returns all the translations
     *
     * @return  TranslationInterface[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Returns the translation in a given language
     *
     * @param   string  $lang       The language code (eg. 'en')
     * @param   bool    $create     Whether or not to create if it doesn't exists
     *
     * @return  TranslationInterface|null
     */
    public function getTranslation($lang, $create = false)
    {
        foreach ($this->translations as $translation) {
            if ($lang == $translation->getLang()) {
                return $translation;
            }
        }

        if ($create) {
            $class = $this->getTranslationClass();

            /** @var TranslationInterface $translation */
            $translation = new $class();
            $translation->setLang($lang);
            $this->addTranslation($translation);

            return $translation;
        }

        return null;
    }

    /**
     * Adds a new translation
     *
     * @param   TranslationInterface $translation
     *
     * @return  static  Returns a reference to itself
     */
    public function addTranslation(TranslationInterface $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

}