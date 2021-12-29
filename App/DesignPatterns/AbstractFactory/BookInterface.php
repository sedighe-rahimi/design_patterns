<?php
namespace App\DesignPatterns\AbstractFactory;

interface BookInterface
{
    public function setName( $name );
    public function setIsbn( $isbn );
    public function getInfo();
}