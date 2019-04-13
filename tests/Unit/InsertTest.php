<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInsertuser()
    {
        $user = new User();
        $user->name = 'ram';
        $user->email = 'ram@gmail.com';
        $user->password= 'ram';
        $this->assertTrue(true);
    }
}