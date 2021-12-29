<?php
namespace App\DesignPatterns\Decorator\Car;

class Feature1 extends CarAbstract
{
    public $options = array();

    public function __construct(CarInterface $decorator)
    {
        $this->options      = ['Feature1*' , 'Feature1**', 'Feature1***'];
        $this->decorator    = $decorator;
        $this->options = array_merge($this->options , $this->decorator->getOptions());
    }

    public function getOptions()
    {
        return $this->options;
    }
}
