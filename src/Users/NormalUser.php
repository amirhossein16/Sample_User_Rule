<?php

namespace Admin\Hw2\Users;

class NormalUser extends User
{
    public function addUser()
    {
        $Name = parent::getName();
        $Email = parent::getEmail();
        $Password = parent::getPassword();
        $user = compact("Name", "Email", "Password");
        $users = json_decode(file_get_contents("Storage/User.json"), true);
        $users['NormalUser'][$Name] = $user;
        file_put_contents("Storage/User.json", json_encode($users));
    }

    use CanLike;
}