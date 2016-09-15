<?php
require_once "src/ScrabbleScore.php";
    class scrabbleTests extends PHPUnit_Framework_TestCase
    {
        function test_one_letter()
        {
            $newScrabble = new ScrabbleScore;
            $input = "a";
            $output = $newScrabble->generateScore($input);
            $this->assertEquals(1, $output);
        }
        function test_two_letters()
        {
            $newScrabble = new ScrabbleScore;
            $input = "Ae";
            $output = $newScrabble->generateScore($input);
            $this->assertEquals(2, $output);
        }
        function test_all_onepoint()
        {
            $newScrabble = new ScrabbleScore;
            $input = "Aeioulnsrt";
            $output = $newScrabble->generateScore($input);
            $this->assertEquals(10, $output);
        }
        function test_all_twopoint()
        {
            $newScrabble = new ScrabbleScore;
            $input = "Dg";
            $output = $newScrabble->generateScore($input);
            $this->assertEquals(4, $output);
        }
        function test_all_threepoint()
        {
            $newScrabble = new ScrabbleScore;
            $input = "Bcmp";
            $output = $newScrabble->generateScore($input);
            $this->assertEquals(12, $output);
        }
        function test_all_fourpoint()
        {
            $newScrabble = new ScrabbleScore;
            $input = "Fhvwy";
            $output = $newScrabble->generateScore($input);
            $this->assertEquals(20, $output);
        }
        function test_all_fivepoint()
        {
            $newScrabble = new ScrabbleScore;
            $input = "k";
            $output = $newScrabble->generateScore($input);
            $this->assertEquals(5, $output);
        }
        function test_all_eightpoint()
        {
            $newScrabble = new ScrabbleScore;
            $input = "Jx";
            $output = $newScrabble->generateScore($input);
            $this->assertEquals(16, $output);
        }
        function test_all_tenpoint()
        {
            $newScrabble = new ScrabbleScore;
            $input = "Qz";
            $output = $newScrabble->generateScore($input);
            $this->assertEquals(20, $output);
        }
    }
?>
