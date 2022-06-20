<?php

class Make
{

    

    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public static function controller(string $name)
    {
        copy(__DIR__.'/Start/Controllers/TestController.php', __DIR__.'/../app/Controllers/'.$name.'Controller.php');
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public static function Modle(string $name){
        copy(__DIR__.'/Start/Models/Test.php', __DIR__.'/../app/Models/'.$name.'.php');
    }
}
