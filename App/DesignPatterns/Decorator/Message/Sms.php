<?php namespace App\DesignPatterns\Decorator\Message;
use App\DesignPatterns\Decorator\Message\MessageAbstract;

class Sms extends MessageAbstract
{
    public function sendMessage()
    {
        return $this->decorator->sendMessage() . 'SMS is sent.<br>'; 
    }
}