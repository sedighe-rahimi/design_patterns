<?php
namespace App\DesignPatterns\Decorator\Car;
use App\DesignPatterns\Decorator\Car\CarAbstract;
use App\DesignPatterns\Decorator\Car\CarInterface;

class Feature3 extends CarAbstract
{
    public $options = array();
    
    public function __construct(CarInterface $decorator)
    {
        $this->options = ['Feature3*' , 'Feature3**'];
        $this->decorator    = $decorator;
        $this->options = array_merge($this->options , $this->decorator->getOptions());
    }

    public function getOptions()
    {
        return $this->options;
    }
}
