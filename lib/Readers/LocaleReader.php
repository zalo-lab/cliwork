<?php

namespace Cliwork\Readers;

use Cliwork\Interfaces\ReaderInterface;

class LocaleReader implements ReaderInterface{

    public function read($path){
        $fileContent = json_decode(json_encode(file_get_contents($path)));

        return json_decode($fileContent);
    }
}
