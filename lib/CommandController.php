<?php

namespace Cliwork;

/**
 * basic command representation
 * as abstract class define 2 obligatory methods
 * - boot($app) which make the bootstraping for the application
 * - handle is the launcher of the command
 */
abstract class CommandController
{
    protected $app;

    protected $input;

    abstract public function handle();

    public function boot(App $app)
    {
        $this->app = $app;
    }

    public function run(CommandCall $input)
    {
        $this->input = $input;
        $this->handle();
    }

    public function teardown()
    {
        //
    }

    protected function getArgs()
    {
        return $this->input->args;
    }

    protected function getParams()
    {
        return $this->input->params;
    }

    protected function hasParam($param)
    {
        return $this->input->hasParam($param);
    }

    protected function getParam($param)
    {
        return $this->input->getParam($param);
    }

    protected function getApp()
    {
        return $this->app;
    }

    protected function getPrinter()
    {
        return $this->getApp()->getPrinter();
    }
}