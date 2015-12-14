<?php

namespace MenuWithAuthentication;


use MenuWithAuthentication\Menu\MenuItem;

/**
 * Class MenuWithAuthentication
 * @package MenuWithAuthentication
 */
class MenuWithAuthentication
{
    /**
     * @var null
     */
    protected static $instance = null;


    /**
     * @var MenuItem[]
     */
    protected $menu;

    function __construct($id)
    {
        $this->menu = static::menu($id);
    }

    /**
     * @param $id
     * @return MenuItem
     */
    public static function menu($id)
    {
        return new MenuItem($id);
    }

    /**
     * @return null|static
     */
    public static function instance($id)
    {
        if ( is_null(static::$instance) ) {
            return static::$instance = new static($id);
        }
        return static::$instance;
    }

    /**
     * @return mixed
     */
    public function getMenu()
    {
        return array();
        //return $this->menu->items();
    }

}