<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
        # code...
        // DB::insert('insert into users (name, email,password) values (?, ?,?)', [
        //     'mahfuz','mahfuz@m.com','password'
        // ]);
        
        //  DB::update('update users set name = ? where id = 1',['khan']);
        //  $results = DB::select('select * from users');

        // DB::delete('delete from users where id = 1');

        // $user = new User;
        // $user->name = "mahfuz";
        // $user->email = "m@m.com";
        // $user->password = bcrypt("12345");
        // $user->save();

        // $user = User::all();
        //     return $user;

        // User::where('id',2)->delete();

        //  User::where('id',3)->update(['name'=>'khan']);
        // $data = [
        //     'name'=>'mahfuz',
        //     'email'=>'mvm@m.com',
        //     'password'=>'12345'
        // ];
        // User::create($data);

        $user = User::all();
            return $user;
        //  return view('home');
    }
}
