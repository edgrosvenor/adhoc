<?php

namespace Adhoc;

use Illuminate\Console\Command as BaseCommand;
use Illuminate\Console\OutputStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends BaseCommand
{
    public $_adhoc;

    public function __construct()
    {
        parent::__construct();
        $this->_adhoc = [];
        $this->ignoreValidationErrors();
    }

    public function run(InputInterface $input, OutputInterface $output)
    {
        $this->output = $this->laravel->make(
            OutputStyle::class, ['input' => $input, 'output' => $output]
        );

        $adhoc = explode(' ', $input->__toString());

        foreach ($adhoc as $arg) {
            if (preg_match('/=/', $arg)) {
                list($k, $v) = explode('=', str_replace("'", '', $arg));
                $this->$k = $v;
                array_push($this->_adhoc, $k);
            }
        }

        return parent::run(
            $this->input = $input, $this->output
        );
    }
}
