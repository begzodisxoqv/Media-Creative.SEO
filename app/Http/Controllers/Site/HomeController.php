<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Aboutsus;
use App\Models\Banners;
use App\Models\Blogs;
use App\Models\Cantacts;
use App\Models\Posts;
use App\Models\Projects;
use App\Models\Services;
use App\Models\Showrooms;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Telegram\Bot\Laravel\Facades\Telegram;

class HomeController extends Controller
{
    
    public function index()
    {
        $banners = Banners::all();
        $aboutsus = Aboutsus::all();
        $services = Services::all();
        $projects = Projects::all();
        $posts = Posts::all();
        $blogs = Blogs::all();
        $contacts = Cantacts::all();
        $showrooms = Showrooms::all();
        return view('site.index',compact('banners','aboutsus','services','projects','posts','blogs','contacts','showrooms'));
    }


    public function sendToTg(Request $request) {
        $this->validate($request, ['phone' => 'required|min:8']);

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '-1001576808771'),
            'parse_mode' => 'HTML',
            'text' => "<b>Новая cобращение!</b>\n"
                . "\n"
                . "<b>Имя клиента</b>: $request->name\n"
                . "<b>Email</b>: $request->phone\n"
                . "<b>Subject</b>: $request->email\n"
                . "<b>Сообщение</b>: $request->message\n"
        ]);
        Alert::success('Обращение принято', 'Скоро мы свяжемся с вами');
        return redirect()->back();
    }

    
   
}
