<?php
namespace App\DesignPatterns\Facade;
session_start();

class Auth
{
    protected $user;

    public function __construct(User $user)
    {
        if( (new UserValidation($user)) )
            $this->user = $user;
    }

    public function login()
    {
        $_SESSION['username']   = $this->user->email;
    }

    public function logout()
    {
        if( isset( $_SESSION['username'] ) )
        {
            unset($_SESSION['username']);
            $this->user = null;
            return true;
        }
    }

    public function user()
    {
        if( isset( $_SESSION['username'] ) )
            return $this->user;
        else
            return null;
    }

    
}