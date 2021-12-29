<?php
namespace App\DesignPatterns\AbstractFactory;

class Poetry implements BookInterface
{
    public $name;
    public $poet;
    public $isbn;
    public $type = 'شعر';

    public function setName( $name )
    {
        $this->name = $name;
        return $this;
    }

    public function setPoet( $poet )
    {
        $this->poet = $poet;
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
                Poet : {$this->poet},<br>
                ISBN : {$this->isbn},<br>
                ";
        return $info;
    }
}