<?php

namespace Adhoc\Tests;


class CommandTest extends TestCase
{
    /** @test */
    public function can_accept_adhoc_input()
    {
        $this->artisan('test:command this=that --happy');
    }
}
