<?php
class BaseMake{
    public static function Maker(string $name , string $type){

        $suffix = ($type == 'Model') ? '' : $type;

        copy(__DIR__.'/../sample/'.$type.'s/Test'.$suffix.'.php', __DIR__.'/../../app/'.$type.'s/'.$name.'.php');
        echo("__________________________________✔️  The operation was successful  ✔️__________________________________");
    }
}