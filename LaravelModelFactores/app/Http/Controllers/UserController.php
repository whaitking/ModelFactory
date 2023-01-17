<?php

namespace App\Http\Controllers;

use App\User;
use Database\Factories\UserFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserController extends Controller
{
    public function createTestUsers()
    {
        factory(User::class, 10)->create();
        return '10 test users created!';
    }
}
