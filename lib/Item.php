<?php

namespace Cliwork;

use Cliwork\Interfaces\OfferInterface;

class Item implements OfferInterface{

    protected $_item;

    public function __construct($item){
        $this->_item = $item;
    }

    public function get($attr = null){
        //return std_Object
        if (is_null($attr)) return $this->_item;

        return $this->_item->$attr;
    }

    public function set($attr, $value){
        if (!is_empty($attr)) $this->_item[$attr] = $value;
    }
}
