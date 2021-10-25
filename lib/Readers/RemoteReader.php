<?php

namespace Cliwork\Readers;

use Cliwork\ReaderInterface;

class RemoteReader implements ReaderInterface{

    public function read($input){
        $curl = curl_init();

        curl_setopt($curl,CURLOPT_URL, $input);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        $output = curl_exec($curl);
        curl_close($curl);

        return json_decode($output);
    }
}
