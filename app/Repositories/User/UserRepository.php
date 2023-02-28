<?php
namespace App\Repositories\User;

use App\Models\User;

class UserRepository
{
    private $user;

    public function __construct(user $user) {
        $this->user = $user;
    }

    public function find()
    {
        return \Auth::user();
    }
}