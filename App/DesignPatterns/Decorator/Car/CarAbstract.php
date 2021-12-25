<?php
namespace App\DesignPatterns\Decorator\Car;
use App\DesignPatterns\Decorator\Car\CarInterface;

abstract class  CarAbstract implements CarInterface
{
    protected   $options    = array();
    public      $decorator;

    // abstract public function getOptions();

}
