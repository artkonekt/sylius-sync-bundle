<?php
/**
 * KonektSyliusSyncBundleTest.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */

namespace Konekt\SyliusSyncBundle\Tests;

use Konekt\SyliusSyncBundle\KonektSyliusSyncBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class KonektSyliusSyncBundleTest extends \PHPUnit_Framework_TestCase
{

    public function testIsSubClassOfBundle()
    {
        $rc = new \ReflectionClass(KonektSyliusSyncBundle::class);

        $this->assertTrue($rc->isSubclassOf(Bundle::class));
    }

    /**
     * @test
     */
    public function testCanBeConstructedWithoutAnyArguments()
    {
        new KonektSyliusSyncBundle();
    }
}