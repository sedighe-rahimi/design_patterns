<?php
namespace App\DesignPatterns\Proxy;

class User extends UserAbstract
{
    protected $users;

    public function __construct()
    {
        $this->all();
    }

    public function all()
    {
        $this->users = [
            1 => [
                'id'        => 1,
                'name'      => 'Sedighe',
                'family'    => 'Rahimi',
                'address'   => 'Tehran'
            ],
            2 => [
                'id'        => 2,
                'name'      => 'Zahra',
                'family'    => 'Hamidi',
                'address'   => 'Mashhad'
            ],
            3 => [
                'id'        => 3,
                'name'      => 'Ali',
                'family'    => 'Babaie',
                'address'   => 'Tabriz'
            ],
            4 => [
                'id'        => 4,
                'name'      => 'Mohammad',
                'family'    => 'Mohammadi',
                'address'   => 'Babol'
            ]
        ];
    }

    public function get($id)
    {
        if( isset($this->users[$id]) )
            return $this->users[$id];
        else
            return null;
    }
}