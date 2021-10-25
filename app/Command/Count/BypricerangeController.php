<?php

namespace App\Command\Count;

use Cliwork\CommandController;
use Cliwork\Item;
use Cliwork\Readers\LocaleReader;
use Cliwork\Collection;

class BypricerangeController Extends CommandController{

    public function handle(){

        $reader = new LocaleReader();
        $collection = new Collection();

        $input = $this->hasParam('input') ? $this->getParam('input') : 0;
        $from = $this->hasParam('from') ? $this->getParam('from') : 0;
        $to = $this->hasParam('to') ? $this->getParam('to') : 9999999999;

        $list = $reader->read($input);

        foreach ($list as $item){
            $itemOB = new Item($item);
            if ($itemOB->get("price") >= $from && $itemOB->get("price") <= $to){
                $collection->addItem($itemOB);
            }
        }

        if (!empty($collection)) {
            for ($i = 1; $i <= $collection->size(); $i++) {
                $this->getPrinter()->display(sprintf("Offer id: %s with: %s as price", $collection->get($i)->get("offerId"), $collection->get($i)->get("price")));
            }
        } else {
            $this->getPrinter()->display("Not items found");
        }

    }

}

