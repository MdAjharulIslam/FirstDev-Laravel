<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PageController extends Controller
{
public function allUsers(){
     return [
        1 => [
            'id' => 1,
            'name' => 'John',
            'email' => 'john@gmail.com'
        ],
        2 => [
            'id' => 2,
            'name' => 'Sara',
            'email' => 'sara@gmail.com'
        ],
        3 => [
            'id' => 3,
            'name' => 'Mike',
            'email' => 'mike@gmail.com'
        ]
    ];
}
    public function showHome(){
        return view('pages.home');
    }
    public function showAllUser(){

       $users = $this->allUsers();
        return view('pages.allUser', compact('users'));
    }
    public function showUser($id){
        $users =$this->allUsers();
        return view('pages.header',['user'=>$users[$id]]);
    }
    public function showBolg(){
        return view('pages.blog');
    }
}
