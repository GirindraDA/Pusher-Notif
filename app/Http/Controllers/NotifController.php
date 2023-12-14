<?php

namespace App\Http\Controllers;

use App\Events\NewContentNotification;

class NotifController extends Controller
{
    public function index()
    {
        return view('client');
    }

    public function show()
    {
        return view('administrator');
    }

    public function sendNotifToClient()
    {
        $message = 'Pesan dari admin sudah siap, silahkan diambil';
        event(new NewContentNotification($message, 'client'));

         return redirect()->back()->with('success', 'Pesanan Admin ke client');
    }

    public function sendNotifToAdmin()
    {
        $message = 'Pesan dari client ke admin sudah dilakuakn';
        event(new NewContentNotification($message, 'admin'));

        return redirect()->back()->with('success', 'pesanan Client ke admin');
    }
}
