<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 29/03/17
 * Time: 23:24
 */

namespace Miky\Component\Menu\Model;


use Doctrine\Common\Collections\ArrayCollection;

class Menu
{
    /**
     * @var string
     */
    protected $name;
    

    /**
     * @var MenuItem[]
     */
    protected $items;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    /**
     * Add item
     *
     * @param MenuItem $items
     *
     * @return Menu
     */
    public function addItem(MenuItem $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Remove item
     *
     * @param MenuItem $item
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeItem(MenuItem $item)
    {
        return $this->items->removeElement($item);
    }


    /**
     * @return MenuItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param MenuItem[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }



    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * @param string $positionId
     */
    public function setPositionId($positionId)
    {
        $this->positionId = $positionId;
    }


}