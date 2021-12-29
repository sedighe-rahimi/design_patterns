<?php
namespace App\DesignPatterns\AbstractFactory;

class BookFactory extends BookAbstract
{
    public function newBook ( $type )
    {
        if( strtolower($type) == 'poet' )   return new Poetry();
        elseif( strtolower($type) == 'novel' )   return new Novel();
    }
}