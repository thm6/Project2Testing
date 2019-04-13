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
    public function testDeleteUser()
    {
        $user = new User();
        $user->name = ' Michael';
        $user->email = 'MichaelJordan@testing.com';
        $user->password = '12345678910';
        $user->save();
        $this->assertTrue($user->delete());
    }
}
