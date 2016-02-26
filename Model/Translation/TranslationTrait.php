<?php
/**
 * TranslationTrait.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Translation;


trait TranslationTrait
{
    /** @var  string */
    protected $lang;

    /**
     * Set the translation's lang
     *
     * @param   string $lang
     *
     * @return  static  Returns a reference to itself
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Returns the translation's lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

}