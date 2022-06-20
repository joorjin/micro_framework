<?php


include_once __DIR__.'/Base/BaseMake.php';

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
        BaseMake::Maker($name.'Controller','Controller');
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @return void
     */
    public static function Model(string $name){
        BaseMake::Maker($name,'Model');
        // copy(__DIR__.'/sample/Models/Test.php', __DIR__.'/../app/Models/'.$name.'.php');
        // echo("__________________________________✔️  The operation was successful  ✔️__________________________________");
    }
}
