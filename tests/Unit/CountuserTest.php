<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CountuserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCount()
    {
        $user = User::All();
        $user->count='50';
        $this->assertEquals(50, $user->count());
    }
}
