<?php
namespace App\DesignPatterns\Template;
use App\DesignPatterns\Template\MsgAbstract;

class Email extends MsgAbstract
{
    public function setMessgage()
    {
        $this->message = 
                    "
                    Dear {$this->name}<br>
                    {$this->body}
                    ";
        return true;
    }

    public function send()
    {
        if( ! is_null($this->message) ){
            // Send Email
            if( true ) // Check sent Sms status
                return true;
        }
        return false;
    }

    public function getMessgae()
    {
        return 
                "
                <div style='padding:0 1rem;'>
                    <h5>Subject : {$this->subject}</h5>
                    <p>{$this->message}</p>
                </div>
                ";
    }
}