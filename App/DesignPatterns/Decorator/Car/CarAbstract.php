<?php
namespace App\DesignPatterns\Decorator\Car;

abstract class  CarAbstract implements CarInterface
{
    protected   $options    = array();
    public      $decorator;

    // abstract public function getOptions();

}
