<?php
namespace App\DesignPatterns\Decorator\Car;
use App\DesignPatterns\Decorator\Car\CarInterface;

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
