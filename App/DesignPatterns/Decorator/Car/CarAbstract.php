<?php
namespace App\DesignPatterns\Decorator\Car;
use App\DesignPatterns\Decorator\Car\CarInterface;

abstract class  CarAbstract implements CarInterface
{
    protected   $options    = array();
    public      $decorator;

    public function getOptions()
    {
        return array_merge($this->options , $this->decorator->getOptions());
    }

}
