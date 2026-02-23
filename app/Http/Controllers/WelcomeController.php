<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Nabil | 244107020114';
    }
    public function user($name)
    {
        return 'Nama saya '.$name;
    }
    public function articles($id)
    {
        return 'Artikel dengan ID: '.$id;
    }
    public function greeting($name,$occupation){
        return view('blog.hello')
        ->with('name',$name)
        ->with('occupation',$occupation);
    }
}