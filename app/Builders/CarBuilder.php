<?php

namespace App\Builders;

class CarBuilder
{
    protected $name, $doors, $wheels, $color, $enginePower;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setDoors($doors)
    {
        $this->doors = $doors;
    }
    public function setWheels($wheels)
    {
        $this->wheels = $wheels;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setEnginePower($enginePower)
    {
        $this->enginePower = $enginePower;
    }

    public function make()
	{
	    return [
	        'status' => 'success',
	        'time' => '2 days',
	    ];
	}

}