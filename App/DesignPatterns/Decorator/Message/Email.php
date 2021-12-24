<?php namespace App\DesignPatterns\Decorator\Message;
use App\DesignPatterns\Decorator\Message\MessageAbstract;

class Email extends MessageAbstract
{
    public function sendMessage()
    {
        return $this->decorator->sendMessage() . 'Email is sent.<br>';
    }
}
