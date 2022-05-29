<?php

require_once getcwd() . DIRECTORY_SEPARATOR . 'interviewers/Interviewer.php';

class CommunityExecutive implements Interviewer
{
    public function askQuestion()
    {
        echo " Explain How to make a community. ";
    }
}