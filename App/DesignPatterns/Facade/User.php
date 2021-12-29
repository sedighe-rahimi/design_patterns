<?php
namespace App\DesignPatterns\Facade;

class User
{
    public $name;
    public $email;
    public $password;

    public function create( $data )
    {
        $this->setName($data['name']);
        $this->setEmail($data['email']);
        $this->setPassword($data['password']);

        return true;
    }

    public function setName( $name )
    {
        $this->name = $name;
    }

    public function setEmail( $email )
    {
        $this->email = $email;
    }

    public function setPassword( $password )
    {
        $this->password = $password;
    }

    public function remove()
    {
        $this->setName(null);
        $this->setEmail(null);
        $this->setPassword(null);

        return true;
    }

    public function isValid()
    {
        if( ( new UserValidation($this) ) )
        {
            return true;
        }
    }
}