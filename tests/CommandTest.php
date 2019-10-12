<?php

namespace Tupleauth\Tests;

class CommandTest extends TestCase
{
    /** @test */
    public function is_login_alive()
    {
        $response = $this->get('/login');

        dump($response->exception);

        $response->assertSuccessful();
    }
}
