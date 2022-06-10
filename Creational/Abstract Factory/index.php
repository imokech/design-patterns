<?php


require_once getcwd() . DIRECTORY_SEPARATOR . 'Form.php';
require_once getcwd() . DIRECTORY_SEPARATOR . 'Classic/ClassicWidgetFactory.php';
require_once getcwd() . DIRECTORY_SEPARATOR . 'Material/MaterialWidgetFactory.php';


$form = new Form;

var_dump($form->render(new ClassicWidgetFactory));
var_dump($form->render(new MaterialWidgetFactory));