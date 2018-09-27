<?php

namespace App\Tests\Api;

use Behat\Gherkin\Node\PyStringNode;
use Behat\Behat\Tester\Exception\PendingException;
use App\Tests\LaravelFeatureContext;

use PHPUnit\Framework\Assert as PHPUnit;
use App\Builders\CarBuilder;

class ApiFeatureContext extends LaravelFeatureContext
{
    protected $carBuilder;

    /**
     * @Given I want to build a car named :arg1
     */
    public function iWantToBuildACarNamed($name)
    {
        $this->carBuilder = new CarBuilder();
        $this->carBuilder->setName($name);
    }

    /**
     * @Given I have :arg1 doors
     */
    public function iHaveDoors($doors)
    {
        $this->carBuilder->setDoors($doors);
    }

    /**
     * @Given I have :arg1 wheels
     */
    public function iHaveWheels($wheels)
    {
        $this->carBuilder->setWheels($wheels);
    }

    /**
     * @Given the colour is :arg1
     */
    public function theColourIs($color)
    {
        $this->carBuilder->setColor($color);
    }

    /**
     * @Given the engine has the power of :arg1 horses
     */
    public function theEngineHasThePowerOfHorses($enginePower)
    {
        $this->carBuilder->setEnginePower($enginePower);
    }

    /**
     * @When I build the car
     */
    public function iBuildTheCar()
    {
        $this->buildResponse = $this->carBuilder->make();
    }

    /**
     * @Then I should get:
     */
    public function iShouldGet(PyStringNode $string)
    {
        $expected = json_decode($string, true);
        PHPUnit::assertEquals($expected, $this->buildResponse);
    }
}
