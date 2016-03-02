<?php
/**
 * RemoteAdapterInterface.php
 *
 * @author      Attila Fulop
 * @author      Sandor Teglas
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-03-02
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Adapter;


use Konekt\SyliusSyncBundle\Model\Remote\Product\RemoteProductInterface;
use Konekt\SyliusSyncBundle\Model\Remote\Stock\RemoteStockInterface;
use Konekt\SyliusSyncBundle\Model\Remote\Taxonomy\RemoteTaxonomyInterface;

interface RemoteAdapterInterface
{

    /**
     * Returns a list of products to be imported
     *
     * @return RemoteProductInterface[]
     */
    public function fetchProducts();


    /**
     * Returns a list of taxonomies to be imported
     *
     * @return RemoteTaxonomyInterface[]
     */
    public function fetchTaxonomies();

    /**
     * Returns a list of Stocks to be imported
     *
     * @return RemoteStockInterface[]
     */
    public function fetchStocks();

    /**
     * Returns a certain taxonomy to be imported
     *
     * @param   string  $id     The id/code of the taxonomy
     *
     * @return  RemoteTaxonomyInterface
     */
    public function fetchTaxonomy($id);

}