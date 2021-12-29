<?php
namespace App\DesignPatterns\AbstractFactory;

abstract class BookAbstract 
{
    abstract public function newPoet();
    abstract public function newNovel();
}