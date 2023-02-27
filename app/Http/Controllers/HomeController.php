<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home.index');
    }
    public function myNotification($type)
    {
        switch ($type) {
            case 'message':
                alert()->message('Sweet Alert with message.');
                break;
            case 'basic':
                alert()->basic('Sweet Alert with basic.','Basic');
                break;
            case 'not':
                alert()->info('User Does not exist');
                return view('pages/signin');
                break;
            case 'success':
                alert()->success('Dashboard','Login Sucsessfully')->autoclose(3500);
                break;
            case 'error':
                alert()->error('Invilide User');
                return view('pages/signin');
                break;
            case 'warning':
                alert()->warning('Email does not verify');
                return view('pages/signin');
                break;
            default:
                # code...
                break;
        }


        return view('pages/dashboard');
    }
}
