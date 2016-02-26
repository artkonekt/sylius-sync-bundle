<?php
/**
 * TaxonTest.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Tests\Model\Remote\Taxonomy;


use Konekt\SyliusSyncBundle\Model\Remote\Taxonomy\Taxon;

class TaxonTest extends \PHPUnit_Framework_TestCase
{
    public function testFindChild()
    {
        /**
         * asd
         * |
         * --- 123
         * |   |
         * |   --- 111
         * |   |
         * |   456
         * |   |
         * |   789
         * qwe
         */
        $root = new Taxon();

        $tasd = (new Taxon())->setId('asd');
        $t123 = (new Taxon())->setId('123');
        $t111 = (new Taxon())->setId('111');

        $root->addChild($tasd);
        $tasd->addChild($t123);
        $t123->addChild($t111);

        $t456 = (new Taxon())->setId('456');
        $tasd->addChild($t456);

        $t789 = (new Taxon())->setId('789');
        $tasd->addChild($t789);

        $tqwe = (new Taxon())->setId('qwe');
        $root->addChild($tqwe);

        $found = $root->findChild('asd');
        $this->assertNotNull($found);
        $this->assertEquals('asd', $found->getId());

        $children = $found->getChildren();
        $this->assertCount(3, $children);

        $found = $root->findChild('123');
        $this->assertNotNull($found);
        $this->assertEquals('123', $found->getId());

        $this->assertNotNull($found->getParent());
        $this->assertEquals('asd', $found->getParent()->getId());

        $children = $found->getChildren();
        $this->assertCount(1, $children);
        $this->assertEquals('111', $children[0]->getId());

        $found = $t123->findChild('111');
        $this->assertNotNull($found);
        $this->assertEquals('111', $found->getId());

        $found = $t123->findChild('qwe');
        $this->assertNull($found);

        $found = $root->findChild('qwe');
        $this->assertEquals('qwe', $found->getId());

        //It shouldn't find itself
        $found = $t123->findChild('123');
        $this->assertNull($found);

    }

}