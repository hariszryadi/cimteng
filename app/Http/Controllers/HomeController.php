<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Video;
use App\Models\Banner;
use App\Models\Greeting;
use App\Models\MediaSocial;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $medsos = MediaSocial::get();
        $greeting = Greeting::get();
        $banners = Banner::where('status', '1')->orderBy('id')->get();
        $videos = Video::where('status', '1')->orderBy('id')->get();
        $news = News::where('status', '1')->orderBy('id')->get();
        
        return view('frontend.index', compact('medsos', 'greeting', 'banners', 'videos', 'news'));
    }
}
