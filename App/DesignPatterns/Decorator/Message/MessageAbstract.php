<?php namespace App\DesignPatterns\Decorator\Message;

abstract class MessageAbstract implements MessageInterface
{
    public $decorator;

    public function __construct(MessageInterface $decorator)
    {
        $this->decorator = $decorator;
    }

    public function sendMessage(){}
}
