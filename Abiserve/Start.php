<?php

class Start{
    
    /**
     * Undocumented function
     *
     * @return void
     */
    public static function main(){
        // mkdir(__DIR__.'/../app');
        // mkdir('app/Controllers');
        // copy(__DIR__.'/sample/Controllers/TestController.php',__DIR__.'/../app/Controllers/TestController.php');
        // mkdir('app/Models');
        // mkdir('Routes');
        fopen('.env','w');
        // fopen('Routes/route.php','w');
        // copy(__DIR__.'/sample/Routes/route.php',__DIR__.'/../Routes/route.php');
        // copy(__DIR__.'/sample/index.php',__DIR__.'/../index.php');
        fopen('index.php','w');
        copy(__DIR__.'/sample/index.php',__DIR__.'/../index.php');
        system('composer install');
        copy(__DIR__.'/sample/Facade.php',__DIR__.'/../vendor/illuminate/support/Facades/Facade.php');
        echo("__________________________________✔️  The operation was successful  ✔️__________________________________");
    }
}