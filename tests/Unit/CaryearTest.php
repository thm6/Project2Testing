<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CaryearTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUpdateCar()
    {
        $car = Car::find(9);
        $car->Year = '2000';
        $this->assertTrue($car->save());
    }

    public function testDeleteCar()
    {
        $car = new Car();
        $car->Make = 'Honda';
        $car->Model= 'crv';
        $car->Year = '2019';
        $car->save();
        $this->assertTrue($car->delete());
    }

}


