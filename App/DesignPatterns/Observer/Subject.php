<?php
namespace App\DesignPatterns\Observer;

use SplObserver;
use SplSubject;

class Subject implements SplSubject
{
    protected $observers = array();
    
    public function attach(SplObserver $observer): void
    {
        $this->observers[spl_object_hash($observer)] = $observer;
        // return $this;
    }

    public function detach(SplObserver $observer): void
    {
        if(isset($observers[spl_object_hash($observer)])){
            unset($observers[spl_object_hash($observer)]);
        }        
    }

    public function notify(): void
    {
        foreach($this->observers as $ob){
            $ob->update($this);
        }
        
    }
}