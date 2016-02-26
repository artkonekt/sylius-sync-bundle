<?php
/**
 * ProductTest.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Tests\Model\Remote\Product;

use Konekt\SyliusSyncBundle\Model\Remote\Product\Product;
use Konekt\SyliusSyncBundle\Model\Remote\Product\Attribute;

class ProductTest extends \PHPUnit_Framework_TestCase
{
    public function testImplementsRemoteProductInterface()
    {
        $this->assertInstanceOf('Konekt\\SyliusSyncBundle\\Model\\Remote\\Product\\RemoteProductInterface', new Product());
    }

    public function testImplementsTranslatableInterface()
    {
        $this->assertInstanceOf('Konekt\\SyliusSyncBundle\\Model\\Translation\\TranslatableInterface', new Product());
    }

    public function testImplementsImageableInterface()
    {
        $this->assertInstanceOf('Konekt\\SyliusSyncBundle\\Model\\Remote\\Image\\ImageableInterface', new Product());
    }

    public function testAttributes()
    {
        $product = new Product();
        $attributeIds = [1, 'xyz', '0'];

        foreach ($attributeIds as $attributeId) {
            $attr = new Attribute();
            $attr->setId($attributeId);

            $product->addAttribute($attr);
        }

        $this->assertCount(count($attributeIds), $product->getAttributes());

        foreach ($attributeIds as $attributeId) {
            $attr = $product->getAttribute($attributeId);
            $this->assertInstanceOf('Konekt\\SyliusSyncBundle\\Model\\Remote\\Product\\RemoteAttributeInterface', $attr);
            $this->assertEquals($attributeId, $attr->getId());
        }

    }

    public function testTranslationClassIsValid()
    {
        $product = new Product();
        $translationClass = $product->getTranslationClass();

        $this->assertTrue(class_exists($translationClass), sprintf('%s class should exist', $translationClass));

        $translation = new $translationClass();
        $this->assertInstanceOf('Konekt\\SyliusSyncBundle\\Model\\Translation\\TranslationInterface', $translation);
    }

}