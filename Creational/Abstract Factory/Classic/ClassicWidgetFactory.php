<?php 

require_once getcwd() . DIRECTORY_SEPARATOR . 'WidgetFactory.php';

class ClassicWidgetFactory implements WidgetFactory
{
    public function renderButton()
    {
        return 'classic button';
    }

    public function renderTextbox()
    {
        return 'classic textbox';
    }
}