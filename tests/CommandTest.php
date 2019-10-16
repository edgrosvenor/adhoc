<?php

namespace Adhoc\Tests;

class CommandTest extends TestCase
{
    /** @test */
    public function can_accept_adhoc_input()
    {
        $this->artisan('test:command color=red sky=blue')
            ->expectsOutput('The sky is blue')
            ->expectsOutput('My favorite color is red')
            ->expectsOutput('color,sky');
    }
}
