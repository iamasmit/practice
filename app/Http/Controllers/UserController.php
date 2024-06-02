<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create()
    {
        $data = [
            "name" => 'Test 2',
            "username" => 'Test User 2',
            "email" => 'test2@gmail.com',
            "password" => 'test123',
            "gender" => 'male',
            "phone" => 987456123,
            "status" => 0,
        ];
        DB::table('users')->insert($data);
        dd("User Created Successfully");
    }
    public function list()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
