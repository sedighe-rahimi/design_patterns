<?php
namespace App\DesignPatterns\Factory;

class BookFactory extends BookAbstract
{
    public function newBook ()
    {
        return new Book();
    }
}