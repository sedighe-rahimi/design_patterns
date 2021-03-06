<?php
namespace App\DesignPatterns\Factory;

interface BookInterface
{
    public function setName( $name );
    public function setAuthor( $author );
    public function setIsbn( $isbn );
    public function getInfo();
}