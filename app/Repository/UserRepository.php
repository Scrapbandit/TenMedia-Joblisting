<?php

namespace App\Repository;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface 
{
    public function getAllUsers() 
    {
        return User::all();
    }

    public function getUserById($UserId) 
    {
        return User::findOrFail($UserId);
    }

    public function deleteUser($UserId) 
    {
        User::destroy($UserId);
    }

    public function createUser(array $UserName) 
    {
        return User::create($UserName);
    }

    public function updateUser($UserId, array $newName) 
    {
        return User::whereId($UserId)->update($newName);
    }

   }
