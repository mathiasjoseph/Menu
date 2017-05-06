<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 29/03/17
 * Time: 23:23
 */

namespace Miky\Component\Menu\Model;


class MenuItem
{
    /**
     * @var Menu
     */
    protected $menu;

    protected $parent;



    /**
     * @return Menu
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param Menu $menu
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;
    }



}