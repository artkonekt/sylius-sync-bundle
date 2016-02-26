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

}