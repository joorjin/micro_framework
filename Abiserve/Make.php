<?php


include_once __DIR__ . '/Base/BaseMake.php';

class Make
{
    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public static function Controller(string $name)
    {
        BaseMake::Maker($name . 'Controller', 'Controller');
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public static function Model(string $name)
    {
        BaseMake::Maker($name, 'Model');
    }

    /**
     * @param string $name
     * @return void
     */
    public static function App(string $name)
    {
        mkdir(__DIR__ . '/../' . $name . 'App');
        mkdir(__DIR__ . '/../' . $name . 'App/app');
        mkdir(__DIR__ . '/../' . $name . 'App/app/Controllers');
        copy(__DIR__ . '/sample/Controllers/TestController.php', __DIR__ . '/../' . $name . 'App/app/Controllers/TestController.php');
        mkdir(__DIR__ . '/../' . $name . 'App/app/Models');
        copy(__DIR__ . '/sample/Models/Test.php', __DIR__ . '/../' . $name . 'App/app/Models/Test.php');
//        mkdir('app/Models');
//        mkdir('Routes');
    }

}
