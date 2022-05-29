<?php


require_once getcwd() . DIRECTORY_SEPARATOR . 'managers/DeveloperManager.php';
require_once getcwd() . DIRECTORY_SEPARATOR . 'managers/MarketingManager.php';


$developerManager = new DeveloperManager();
var_dump($developerManager->takeInterview());

$marketingManager = new MarketingManager();
var_dump($marketingManager->takeInterview());