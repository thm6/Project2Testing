<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {

        {
            $user = new User();
            $user->name = '';
            $user->email = '';
            $user->password = '';
            $user->save();
            $this->assertTrue($user->delete());
        }

    }
}





