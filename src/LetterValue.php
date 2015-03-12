<?php
    class LetterValue
    {
        function assignLetterValue($word)
        {
            $score = 0;
            $onesArray = array("a", "e", "i", "o", "u", "l", "n", "r", "s", "t");
            $twosArray = array("d", "g");
            $threesArray = array("b", "c", "m", "p");
            $foursArray = array("f", "h", "v", "w", "y");
            $fivesArray = array("k");
            $eightsArray = array("j", "x");
            $tensArray = array("q", "z");

            $array_of_letters = str_split($word);
            foreach ($array_of_letters as $letter) {

                if (in_array($letter, $onesArray)) {
                    $score += 1;
                }

                elseif (in_array($letter, $twosArray)) {
                    $score += 2;
                }

                elseif (in_array($letter, $threesArray)) {
                    $score += 3;

                }
                elseif (in_array($letter, $foursArray)) {
                    $score += 4;

                }
                elseif (in_array($letter, $fivesArray)) {
                    $score += 5;
                }
                elseif (in_array($letter, $eightsArray)) {
                        $score += 8;
                }

                elseif (in_array($letter, $tensArray)) {
                        $score += 10;
                }


                // This section is the commented out portion to be inserted to be used in replacement of the above if /esleif statements
            }//foreach1

            return $score;
        }//close assignLetterValue

    }//closes class

    // foreach ($onesArray as $one_point_letter) {
    //      if ($one_point_letter == $letter) {
    //         $score += 1;
        //}if
    //}foreach2
?>
