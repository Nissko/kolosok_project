<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Telegram\Bot\Laravel\Facades\Telegram;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }


}
