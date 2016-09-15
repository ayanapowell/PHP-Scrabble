<?php
    class ScrabbleScore
    {
        function generateScore($input)
        {
          $score = 0;
          $input = strtolower($input);
          $inputArray = str_split($input);
          for($i = 0; $i < count($inputArray); $i++) {
              if ($input[$i] == "a" || $input[$i] == "e" || $input[$i] == "i" || $input[$i] == "o" || $input[$i] == "u" || $input[$i] == "l" || $input[$i] == "n" || $input[$i] == "s" || $input[$i] == "r" || $input[$i] == "t") {
              $score++;
              } elseif ($input[$i] == "d" || $input[$i] == "g") {
                  $score += 2;
              } elseif ($input[$i] == "b" || $input[$i] == "c" || $input[$i] == "m" || $input[$i] == "p") {
                  $score += 3;
              } elseif ($input[$i] == "f" || $input[$i] == "h" || $input[$i] == "v" || $input[$i] == "w" || $input[$i] == "y") {
                  $score += 4;
              } elseif ($input[$i] == "k") {
                  $score += 5;
              } elseif ($input[$i] == "j" || $input[$i] == "x") {
                  $score += 8;
              } else {
                  $score += 10;
              }
          }
          return $score;
        }
    }
?>
