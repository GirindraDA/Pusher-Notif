<?php

namespace App\Http\Controllers;

use App\Events\NewContentNotification;

class NotifController extends Controller
{
    //

    public function index(){
        return view('welcome');
    }

    public function testNotif()
    {
         event(new NewContentNotification('Pesanan sudah siap kak, silahkan diambil :)'));

         return view('welcome');
    }
}
