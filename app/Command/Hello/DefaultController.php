<?php

namespace App\Command\Hello;

use Cliwork\CommandController;

class DefaultController extends CommandController
{
    public function handle()
    {
        $print = "From Default";
        $this->getPrinter()->display("Hello World! ($print)");
    }
}