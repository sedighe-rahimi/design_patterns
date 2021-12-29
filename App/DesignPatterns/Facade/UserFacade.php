<?php
namespace App\DesignPatterns\Facade;

class UserFacade
{
    public $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function create( $name , $email , $password )
    {
        $data = [
            'name'      => trim($name),
            'email'     => trim($email),
            'password'  => trim($password)
        ];

        if( $this->user->create( $data ) )
        {
            if( $this->user->isValid() )
            {
                $this->auth = new Auth( $this->user );
                $this->auth->login();
            }
            else
                $this->user->remove();
        }
    }

    public function get()
    {
        return $this->user;
    }
    
    public function update( $data )
    {
        $oldUSer = $this->get();

        if( isset( $data['name'] ) )
            $this->user->setName( $data['name'] );
        if( isset( $data['email'] ) )
            $this->user->setEmail( $data['email'] );
        if( isset( $data['password'] ) )
            $this->user->setPassword( $data['password'] );

        if( ! $this->user->isValid() ){
            $user = $oldUSer;
            return false;
        }

        return true;
    }

}