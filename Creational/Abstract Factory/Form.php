<?php 

require_once getcwd() . DIRECTORY_SEPARATOR . 'Material/MaterialButton.php';
require_once getcwd() . DIRECTORY_SEPARATOR . 'Material/MaterialTextbox.php';

require_once getcwd() . DIRECTORY_SEPARATOR . 'Classic/ClassicButton.php';
require_once getcwd() . DIRECTORY_SEPARATOR . 'Classic/ClassicTextbox.php';

require_once getcwd() . DIRECTORY_SEPARATOR . 'WidgetFactory.php';

class Form 
{
    public function render(WidgetFactory $factory) 
    {
        return [$factory->renderButton(), $factory->renderTextbox()];
    }
}