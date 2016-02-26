<?php
/**
 * RemoteAdapterInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-25
 */


namespace Konekt\SyliusSyncBundle\Model\Remote\Adapter;


interface RemoteAdapterInterface
{

    /**
     * Returns a list of products to be imported
     *
     * @return Konekt\SyliusSyncBundle\Model\Remote\Product\RemoteProductInterface[]
     */
    public function fetchProducts();


    /**
     * Returns a list of taxonomies to be imported
     *
     * @return Konekt\SyliusSyncBundle\Model\Remote\Taxonomy\RemoteTaxonomyInterfaceInterface[]
     */
    public function fetchTaxonomies();


    /**
     * Returns a certain taxonomy to be imported
     *
     * @param   string  $id     The id/code of the taxonomy
     *
     * @return Konekt\SyliusSyncBundle\Model\Remote\Taxonomy\RemoteTaxonomyInterfaceInterface
     */
    public function fetchTaxonomy($id);

}