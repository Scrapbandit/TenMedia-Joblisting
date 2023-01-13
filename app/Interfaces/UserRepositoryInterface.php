<?php

namespace App\Interfaces;

interface UserRepositoryInterface 
{
    public function getAllUsers();
    public function getUserById($UserId);
    public function deleteUser($UserId);
    public function createUser(array $UserName);
    public function updateUser($UserId, array $newName);
}