<?php

require_once getcwd() . DIRECTORY_SEPARATOR . 'interviewers/Interviewer.php';

abstract class HiringManager
{
    abstract protected function makeInterviewer() : Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestion();
    }
}