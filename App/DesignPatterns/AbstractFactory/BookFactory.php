<?php
namespace App\DesignPatterns\AbstractFactory;

class BookFactory extends BookAbstract
{
    public function newPoet ()
    {
        return new Poetry();
    }
    public function newNovel ()
    {
        return new Novel();
    }
}