<?php namespace App\DesignPatterns\Observer;

use SplObserver;
use SplSubject;

class Observer2 implements SplObserver{
    public function update(SplSubject $subject): void
    {
        echo 'This is Observer2<br>';
    }
}