<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAllUsers(){
        return response()->jason([
            'users' =>[
            [
                'id' => 1,
                'name' => 'jhone Deo',
                'age' => '19',
                'role' => 'Admin'
            ],
            [
                'id' => 2,
                'name' => 'janith Deo',
                'age' => '20',
                'role' => 'Staff'
            ],
            [
                'id' => 3,
                'name' => 'gorhta',
                'age' => '39',
                'role' => 'User'
            ],
            [
                 'id' => 4,
                 'name' => 'sahana',
                 'age' => '55',
                 'role' => 'User'
            ]





            ]
        ]);
    }
}
