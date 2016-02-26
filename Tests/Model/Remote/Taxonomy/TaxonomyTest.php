<?php
/**
 * TaxonomyTest.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Tests\Model\Remote\Taxonomy;

use Konekt\SyliusSyncBundle\Model\Remote\Taxonomy\Taxonomy;

class TaxonomyTest extends \PHPUnit_Framework_TestCase
{
    public function testImplementsRemoteTaxonomyInterface()
    {
        $this->assertInstanceOf('Konekt\\SyliusSyncBundle\\Model\\Remote\\Taxonomy\\RemoteTaxonomyInterface', new Taxonomy());
    }

    public function testImplementsTranslatableInterface()
    {
        $this->assertInstanceOf('Konekt\\SyliusSyncBundle\\Model\\Translation\\TranslatableInterface', new Taxonomy());
    }

    public function testImplementsImageableInterface()
    {
        $this->assertInstanceOf('Konekt\\SyliusSyncBundle\\Model\\Remote\\Image\\ImageableInterface', new Taxonomy());
    }

    public function testTranslationClassIsValid()
    {
        $taxonomy = new Taxonomy();
        $translationClass = $taxonomy->getTranslationClass();

        $this->assertTrue(class_exists($translationClass), sprintf('%s class should exist', $translationClass));

        $translation = new $translationClass();
        $this->assertInstanceOf('Konekt\\SyliusSyncBundle\\Model\\Translation\\TranslationInterface', $translation);
    }

    public function testId()
    {
        $ids = [0, 1, 2, PHP_INT_MAX, 'a', 'abcdefgh', '0', '1', 'xyz', 1.2, 0.1];
        $taxonomy = new Taxonomy();

        foreach ($ids as $id) {
            $taxonomy->setId($id);
            $this->assertSame($id, $taxonomy->getId());
        }
    }

}