<?php
/**
 * TaxonomyTranslation.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Taxonomy;

use Konekt\SyliusSyncBundle\Model\Translation\TranslationOfNameTrait;
use Konekt\SyliusSyncBundle\Model\Translation\TranslationTrait;

class TaxonomyTranslation implements RemoteTaxonomyTranslationInterface
{
    use TranslationTrait;
    use TranslationOfNameTrait;

}
