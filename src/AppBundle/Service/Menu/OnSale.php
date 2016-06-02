<?php

namespace AppBundle\Service\Menu;

class OnSale
{
    public function getItems()
    {
        return array(
            array('path' => 'iphone', 'name' => 'iPhone', 'img' => '#', 'price' => 19.99),
            array('path' => 'lg', 'name' => 'LG', 'img' => '#', 'price' => 29.99),
            array('path' => 'samsung', 'name' => 'Samsung', 'img' => '#', 'price' => 39.99),
            array('path' => 'lumia', 'name' => 'Lumia', 'img' => '#', 'price' => 49.99),
            array('path' => 'edge', 'name' => 'Edge', 'img' => '#', 'price' => 69.99),
        );
    }
}