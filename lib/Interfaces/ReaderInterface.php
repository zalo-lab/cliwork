<?php

namespace Cliwork\Interfaces;

/**
 * The interface provides the contract for different readers
 * E.g. it can be XML/JSON Remote Endpoint, or CSV/JSON/XML local files
 */
Interface ReaderInterface{

    /**
     * Read in incoming data and parse to objects
     */
    public function read($input);

}