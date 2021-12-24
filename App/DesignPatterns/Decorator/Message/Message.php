<?php namespace App\DesignPatterns\Decorator\Message;
use App\DesignPatterns\Decorator\Message\MessageInterface;

class Message implements MessageInterface 
{
    protected $message;
    
    public function sendMessage()
    {
        return 'This is main message.<br>';
    }
}