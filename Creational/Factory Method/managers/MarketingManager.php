<?php

require_once getcwd() . DIRECTORY_SEPARATOR . 'managers/HiringManager.php';
require_once getcwd() . DIRECTORY_SEPARATOR . 'interviewers/Interviewer.php';
require_once getcwd() . DIRECTORY_SEPARATOR . 'interviewers/CommunityExecutive.php';

class MarketingManager extends HiringManager
{

    protected function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}