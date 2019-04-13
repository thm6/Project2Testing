<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class InsertcarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = new Car();
        $car->Make = 'Ford';
        $car->Model = 'Focus';
        $car->Year = '2019';
        $this->assertTrue(true);
    }
}
