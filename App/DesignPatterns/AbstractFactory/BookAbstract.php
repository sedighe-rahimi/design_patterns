<?php
namespace App\DesignPatterns\AbstractFactory;

abstract class BookAbstract 
{
    abstract public function newBook( string $type );
}