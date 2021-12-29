<?php
namespace App\DesignPatterns\Factory;

class BookFactory extends BookAbstract
{
    public function newBook ( $type )
    {
        if( strtolower($type) == 'poet' )   return new Poetry();
        elseif( strtolower($type) == 'novel' )   return new Novel();
    }
}