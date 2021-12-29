<?php
namespace App\DesignPatterns\Factory;

class Novel implements BookInterface
{
    
    public $name;
    public $author;
    public $isbn;
    public $type = 'رمان';

    public function setName( $name )
    {
        $this->name = $name;
        return $this;
    }

    public function setAuthor( $author )
    {
        $this->author = $author;
        return $this;
    }

    public function setIsbn( $isbn )
    {
        $this->isbn = $isbn;
        return $this;
    }

    public function getInfo()
    {
        $info = "
                Name : {$this->name},<br>
                Author : {$this->author},<br>
                ISBN : {$this->isbn},<br>
                ";
        return $info;
    }
}