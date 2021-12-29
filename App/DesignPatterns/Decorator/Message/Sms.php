<?php namespace App\DesignPatterns\Decorator\Message;

class Sms extends MessageAbstract
{
    public function sendMessage()
    {
        return $this->decorator->sendMessage() . 'SMS is sent.<br>'; 
    }
}