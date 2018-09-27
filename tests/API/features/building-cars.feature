Feature: Building Cars
    In order to facilitate human transportation
    As a manufacturer
    I need to build them fancy cars

Scenario: Build a regular 4-seater vehicle
        Given I want to build a car named "Reek"
        And I have 4 doors
        And I have 4 wheels
        And the colour is "blue"
        And the engine has the power of 600 horses
        When I build the car
        Then I should get:
        """
        {
            "status": "success",
            "time": "2 days"
        }
        """