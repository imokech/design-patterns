<?php

require_once getcwd() . DIRECTORY_SEPARATOR . 'managers/HiringManager.php';
require_once getcwd() . DIRECTORY_SEPARATOR . 'interviewers/Interviewer.php';
require_once getcwd() . DIRECTORY_SEPARATOR . 'interviewers/Developer.php';

class DeveloperManager extends HiringManager
{

    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}