<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function __invoke($name = 'nb')
    {
        return view('hello', ['name'=> $name]);
    }
}