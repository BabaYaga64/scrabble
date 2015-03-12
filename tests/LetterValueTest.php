<?php

    require_once "src/LetterValue.php";

    class LetterValueTest extends PHPUnit_Framework_TestCase
    {
        function test_SimpleValueAssignment()
        {

            //Arrange
            $test_LetterValue = new LetterValue;
            $input = "a";

            //Act
            $result = $test_LetterValue->assignLetterValue($input);

            //Assert
            $this->assertEquals(1, $result);

        }

        function test_TwoValueAssignments()
        {
            //Arrange
            $testTwoValues = new LetterValue;
            $input = "aa";

            //Act
            $result = $testTwoValues->assignLetterValue($input);


            //Assert
            $this->assertEquals(2, $result);
        }

        function test_DifferentLetters()
        {
            //Arrange
            $testDifferentLetters = new LetterValue;
            $input = "at";

            //Act
            $result = $testDifferentLetters->assignLetterValue($input);


            //Assert
            $this->assertEquals(2, $result);
        }


        function test_TwoPointValue()
        {
            //Arrange
            $testTwoPointValue = new LetterValue;
            $input = "dad";

            //Act
            $result = $testTwoPointValue->assignLetterValue($input);


            //Assert
            $this->assertEquals(5, $result);
        }

        function test_ThreePointValue()
        {
            //Arrange
            $testThreePointValue = new LetterValue;
            $input = "dab";

            //Act
            $result = $testThreePointValue->assignLetterValue($input);


            //Assert
            $this->assertEquals(6, $result);
        }

        function test_LastPointValue()
        {
            //Arrange
            $testLastPointValue = new LetterValue;
            $input = "qzjx";

            //Act
            $result = $testLastPointValue->assignLetterValue($input);


            //Assert
            $this->assertEquals(36, $result);
        }
    }

?>
