<?php

namespace ilhamdev\upscale\tests;

use Tests\TestCase;

class TestHitController extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetUser()
    {
        $response = $this->get('getuser');

        $response->assertStatus(200);
    }

    public function testGetUserDetail()
    {
        $response = $this->get('getuser/1');

        $response->assertStatus(200);
    }
}
