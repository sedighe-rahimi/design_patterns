<?php namespace App\DesignPatterns\Decorator\Message;

class Message implements MessageInterface 
{
    protected $message;
    
    public function sendMessage()
    {
        return 'This is main message.<br>';
    }
}