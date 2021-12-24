<?php namespace App\DesignPatterns\Observer;

use SplObserver;
use SplSubject;

class Observer1 implements SplObserver{
    public function update(SplSubject $subject): void
    {
        echo 'This is Observer1<br>';
    }
}