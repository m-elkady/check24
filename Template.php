<?php

namespace Check24;

Class Template
{
    public static function getHtmlHeader($pageTitle = 'Home')
    {
        include_once 'views/htmlHeader.php';
    }

    public static function getMainMenu()
    {
        include_once 'views/mainMenu.php';
    }

    public static function getHtmlFooter()
    {
        include_once 'views/footer.php';
    }

    public static function view($template, $data = [])
    {
        extract($data);
        self::getHtmlHeader('Home');
        self::getMainMenu();
        include 'views/' . $template . '.php';
        self::getHtmlFooter();
    }


}

?>
