<?php namespace App\DesignPatterns\Decorator\Message;

class Email extends MessageAbstract
{
    public function sendMessage()
    {
        return $this->decorator->sendMessage() . 'Email is sent.<br>';
    }
}
