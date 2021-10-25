<?php

namespace App\Command\Count;

use Cliwork\Collection;
use Cliwork\CommandController;
use Cliwork\Item;
use Cliwork\Readers\LocaleReader;

class ByvendorController extends CommandController
{

    public function handle()
    {
        $reader = new LocaleReader();
        $collection = new Collection();

        $input = $this->hasParam('input') ? $this->getParam('input') : 0;
        $vendor = $this->hasParam('vendor') ? $this->getParam('vendor') : 0;

        $list = $reader->read($input);
        foreach ($list as $item) {
            $itemOB = new Item($item);
            if ($vendor > 0 && $itemOB->get("vendorId") == $vendor) {
                $collection->addItem($itemOB);
            }
        }

        if (!empty($collection)) {
            echo "List of offers from vendor: ".$vendor."\n";
            for ($i = 1; $i <= $collection->size(); $i++) {
                $this->getPrinter()->display(sprintf("Offer id: %s", $collection->get($i)->get("offerId")));
            }
        } else {
            $this->getPrinter()->display("Not items found");
        }

    }

}
