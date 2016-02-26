<?php
/**
 * TreeNodeInterface.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Tree;


interface TreeNodeInterface
{

    /**
     * Returns the parent node if any
     *
     * @return TreeNodeInterface|null
     */
    public function getParent();

    /**
     * Sets the parent node
     *
     * @param TreeNodeInterface $node
     */
    public function setParent(TreeNodeInterface $node);

    /**
     * Add a child node to this node
     *
     * @param TreeNodeInterface $node
     */
    public function addChild(TreeNodeInterface $node);

    /**
     * Returns the (direct) children of this node
     *
     * @return TreeNodeInterface[]
     */
    public function getChildren();

    /**
     * Returns whether the node has child elements
     *
     * @return boolean
     */
    public function hasChildren();

}