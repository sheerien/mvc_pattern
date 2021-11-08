<?php
namespace Core\View;

class View
{
    public static function make($view, $params = [])
    {
        $baseContent = self::getBaseContent();
        $viewContent = self::getViewContent($view, $params);
    }

    /** 
     * getBaseContent html layout
     * @return bool|string
     */
    protected static function getBaseContent()
    {
        ob_start();

        include base_path() . main_path_layout();
        
        return ob_get_clean();
    }

    protected static function getViewContent()
    {
    
    }
}