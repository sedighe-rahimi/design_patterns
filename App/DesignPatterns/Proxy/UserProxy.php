<?php
namespace App\DesignPatterns\Proxy;

class UserProxy extends UserAbstract
{
    public function get($id)
    {
        if( $this->hasPermision() )
        {
            $user = (new User())->get($id);

            // filter user data
            $filteredUser   = [
                'name'      => $user['name'],
                'family'    => $user['family']
            ];

            return $filteredUser;
        }
    }

    public function hasPermision()
    {
        return true; // check something
    }
}