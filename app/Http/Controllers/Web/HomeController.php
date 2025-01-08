<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Message;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $doctors = Admin::where('type', 'doctor')->get();
        $news = News::latest()->get();

            return view('web.index', [
                'doctors' => $doctors,
                'news' => $news,
                'messages' => Message::where('user_id', Auth::user()->id)->get()
            ]);
    }
}
