<?php
/**
 * TreeNodeTrait.php
 *
 * @author      Attila Fulop
 * @copyright   Copyright (c) 2016 Storm Storez Srl-d
 * @license     Proprietary
 * @version     2016-02-26
 * @since       2016-02-26
 */


namespace Konekt\SyliusSyncBundle\Model\Tree;


trait TreeNodeTrait
{
    /** @var  TreeNodeInterface|null */
    protected $parent;

    /** @var  TreeNodeInterface[] */
    protected $children = [];

    /**
     * Returns the parent node if any
     *
     * @return static|null
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets the parent node
     *
     * @param TreeNodeInterface $node
     *
     * @return  static
     */
    public function setParent(TreeNodeInterface $node)
    {
        $this->parent = $node;

        return $this;
    }

    /**
     * Add a child node to this node
     *
     * @param TreeNodeInterface $node
     *
     * @return  static
     */
    public function addChild(TreeNodeInterface $node)
    {
        $this->children[] = $node;
        $node->setParent($this);

        return $this;
    }

    /**
     * Returns the (direct) children of this node
     *
     * @return static[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Returns whether the node has child elements
     *
     * @return boolean
     */
    public function hasChildren()
    {
        return (bool)count($this->children);
    }
}