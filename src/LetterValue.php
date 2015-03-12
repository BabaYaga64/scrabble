<?php
    class LetterValue
    {
        function assignLetterValue($word)
        {
            $score = 0;
            $onesArray = array("a", "e", "i", "o", "u", "l", "n", "r", "s", "t");
            $two = "d";
            $array_of_letters = str_split($word);
            foreach ($array_of_letters as $letter) {
                foreach ($onesArray as $one_point_letter){
                     if ($one_point_letter == $letter) {
                        $score += 1;
                    }
                }//foreach2
            };//foreach1

            return $score;
        }//close assignLetterValue

    }//closes class

?>
