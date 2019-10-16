<?php

namespace Adhoc\Commands;

use Adhoc\Command;

class TestCommand extends Command
{
    protected $signature = 'test:command';

    public function handle()
    {
        $this->info('The sky is '.$this->sky);
        $this->info('My favorite color is '.$this->color);
        $this->info(join(',', $this->_adhoc));
    }
}
