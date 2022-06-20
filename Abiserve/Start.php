<?php

class Start{
    public static function main(){
        mkdir(__DIR__.'/../app');
        mkdir('app/Controllers');
        mkdir('app/Models');
        fopen('.env','w');
        // copy(__DIR__.'/Start/Controllers/TestController.php', __DIR__.'/../app/Controllers/TestController.php');
        // copy(__DIR__.'/Start/Models/Test.php', __DIR__.'/../app/Models/Test.php');
        system('composer install');
        echo '**************end**************';
    }
}