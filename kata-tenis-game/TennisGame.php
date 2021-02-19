<?php

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:20 PM
 */

class TennisGame
{
    public $score = '';
    public $playerOne;
    public $playerTwo;


    public function getScore($playerOne, $playerTwo, $playerOneScore, $playerTwoScore)
    {
//        $tempScore=0;
//        $isEqualScore = $playerOneScore == $playerTwoScore;
        $this->playerOne = $playerOne;
        $this->playerTwo = $playerTwo;
        $subtractionScore = $playerOneScore-$playerTwoScore;

        if ($subtractionScore == 0) {
            $drawScore = $playerOneScore;
            $this->showResultDraw($drawScore);
        }
        else{

        }
        else if ($playerOneScore>=4 || $playerTwoScore>=4)
        {
            if ($subtractionScore > 0){
                if ($subtractionScore == 1){
                    $this->score = "Advantage".$playerOne;
                }
                else{
                    $this->score = "Win for ".$playerOne;
                }
            }
            else{
                if ($subtractionScore == -1){
                    $this->score = "Advantage ".$playerTwo;
                }
                else{
                    $this->score = "Win for ".$playerTwo;
                }
            }
//            if ($minusResult==1) $this->score ="Advantage player1";
//            else if ($minusResult ==-1) $this->score ="Advantage player2";
//            else if ($minusResult>=2) $this->score = "Win for player1";
//            else $this->score ="Win for player2";
        }
        else
        {
            for ($i = 1; $i < 3; $i++)
            {
                if ($i==1) $tempScore = $playerOneScore;
                else { $this->score.= "-"; $tempScore = $playerTwoScore;}
                $this->displayResult($tempScore);
            }
        }
    }
    function showWinner(){

    }
    function showResultDraw($drawScore){
        switch ($drawScore)
        {
            case 0:
                $this->score = "Love-All";
                break;
            case 1:
                $this->score = "Fifteen-All";
                break;
            case 2:
                $this->score = "Thirty-All";
                break;
            case 3:
                $this->score = "Forty-All";
                break;
            default:
                $this->score = "Deuce";
                break;

        }
    }
    function displayResult($tempScore){
        switch($tempScore)
        {
            case 0:
                $this->score.="Love";
                break;
            case 1:
                $this->score.="Fifteen";
                break;
            case 2:
                $this->score.="Thirty";
                break;
            case 3:
                $this->score.="Forty";
                break;
        }
    }
    public function __toString()
    {
        return $this->score;
    }
}
