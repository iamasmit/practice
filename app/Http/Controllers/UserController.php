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
        $users = DB::table('users')->get();

        return view('user-list', compact('users'));
        // foreach ($users as $user) {
        //     dump($user);
        // }
        // dd($users->toArray());
    }
    public function update()
    {
        $data = [
            "name" => 'Test1',
            "username" => 'Test User 1',
            "email" => 'test12@gmail.com',
            "password" => 'test123',
            "gender" => 'male',
            "phone" => 987456135,
            "status" => 0,

            "updated_at" => now(),
        ];
        DB::table('users')->where('id', 1)->update($data);
        dd("User Updated Successfully");
    }
    public function delete()
    {
        DB::table('users')->where('id', 2)->delete();
        dd("Data delete Successfully");
    }
}
