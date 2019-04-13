<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdateuserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUpdateuser()
    {
        $user = User::find(20);
        $user->name = 'Steve Smith';
        $user->email = 'steve@live.com';
        $user->password = 'steve';
        $this->assertTrue($user->save());

    }

}