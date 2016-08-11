<?php

namespace AppBundle\Model;

class UserModel
{
    public static $users = [
        0 => [
            'name' => 'John',
            'surname' => 'Doe',
            'age' => 29],
        1 => [
            'name' => 'Jone',
            'surname' => 'Doe',
            'age' => 27]
        ];

    public function getUserData($id) {
        return isset(self::$users[$id]) ? self::$users[$id] : false;
    }
}