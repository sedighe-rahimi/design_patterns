<?php
namespace App\DesignPatterns\Facade;

class UserValidation
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function isValid()
    {
        if( true )
        {
            return true;
        }
    }
}