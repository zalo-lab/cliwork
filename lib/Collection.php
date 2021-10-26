<?php

namespace Cliwork;

use Cliwork\Interfaces\OfferCollectionInterface;

/**
 * Basic iterator
 */
class Collection implements OfferCollectionInterface{

    protected $_collection;
    protected $_currentKey = 0;

    public function __construct(){
        $this->_collection = [];
    }

    public function get($index){
        return $this->_collection[$index-1];
    }

    public function getIterator(){
        return $this;
    }

    public function addItem($item){
        $this->_collection[]= $item;
    }

    public function removeAtIndex($index){
        unset($this->_collection[$index-1]);
    }

    public function getCurrentKey(){
        return $this->_currentKey+1;
    }

    public function getNextItem(){
        $this->_currentKey++;
        return $this->_collection[$this->_currentKey];
    }

    public function getPrevItem(){
        $this->_currentKey--;
        return $this->_collection[$this->_currentKey];
    }

    public function size(){
        return count($this->_collection);
    }

}
