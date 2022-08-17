<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Video;
use App\Models\Banner;
use App\Models\Greeting;
use App\Models\MediaSocial;
use App\Models\VisionMission;

class HomeController extends Controller
{
    public function __construct()
    {
        $medsos = MediaSocial::get();
        view()->share('medsos', $medsos);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $greeting = Greeting::get();
        $banners = Banner::where('status', '1')->orderBy('id')->get();
        $videos = Video::where('status', '1')->orderBy('id')->get();
        $news = News::where('status', '1')->orderBy('id')->get();
        
        return view('frontend.index', compact('greeting', 'banners', 'videos', 'news'));
    }

    public function lakip()
    {
        return view('frontend.lakip');
    }

    public function vision_mission()
    {
        $vm = VisionMission::get();
        return view('frontend.vision-mission', compact('vm'));
    }
}
