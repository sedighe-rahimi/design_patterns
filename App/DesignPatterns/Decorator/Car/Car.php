<?php
namespace App\DesignPatterns\Decorator\Car;

class Car implements CarInterface
{
    public $options = array();

    public function __construct()
    {
        $this->options = ['Car'];
    }

    public function getOptions()
    {
        return $this->options;
    }
}
