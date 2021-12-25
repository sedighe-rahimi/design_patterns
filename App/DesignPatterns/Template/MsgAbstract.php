<?php
namespace App\DesignPatterns\Template;

abstract class MsgAbstract
{
    public $to;
    public $name;
    public $subject;
    public $body;
    protected $message;
    
    public function __construct( $to , $name , $subject , $body )
    {
        $this->to       = $to;
        $this->name     = $name;
        $this->subject  = $subject;
        $this->body     = $body;
        $this->setMessgage();
    }

    abstract public function setMessgage();
    abstract public function send();
}