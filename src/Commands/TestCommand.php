<?php

namespace Adhoc\Commands;

use Adhoc\Command;

class TestCommand extends Command
{
    protected $signature = 'test:command';

    public function handle()
    {
        dump($this->arguments());
        dump($this->options());
        dd("done");
    }
}