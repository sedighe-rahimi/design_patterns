<?php
namespace App\DesignPatterns\Template;

class Sms extends MsgAbstract
{
    public function setMessgage()
    {
        $this->message = 
                    "
                    Dear {$this->name},\r\n
                    {$this->body}
                    ";
        return true;
    }

    public function send()
    {
        if( ! is_null($this->message) ){
            // Send Sms
            if( true ) // Check sent Sms status
                return true;
        }
        return false;
    }

    public function getMessgae()
    {
        return $this->message;
    }
}