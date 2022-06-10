<?php 

require_once getcwd() . DIRECTORY_SEPARATOR . 'WidgetFactory.php';

class MaterialWidgetFactory implements WidgetFactory
{
    public function renderButton()
    {
        return 'material button';
    }

    public function renderTextbox()
    {
        return 'material textbox';
    }
}