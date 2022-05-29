<?php

require_once getcwd() . DIRECTORY_SEPARATOR . 'interviewers/Interviewer.php';

class Developer implements Interviewer
{
    public function askQuestion()
    {
        echo " Explain Design Patterns. ";
    }
}