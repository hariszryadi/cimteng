<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iumk;
use App\Models\News;
use App\Models\Video;
use App\Models\Lakip;
use App\Models\Banner;
use App\Models\Comment;
use App\Models\Service;
use App\Models\Greeting;
use App\Models\MediaSocial;
use App\Models\UrbanVillage;
use App\Models\GalleryPhoto;
use App\Models\VisionMission;
use App\Models\DistrictEmployee;
use App\Models\DistrictMonograph;
use App\Models\OrganizationalStructure;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function __construct()
    {
        $medsos = MediaSocial::get();
        $urban_village = UrbanVillage::orderBy('id')->get();
        view()->share('medsos', $medsos);
        view()->share('urban_village', $urban_village);
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
        $lakip = Lakip::orderBy('id', 'desc')->limit(2)->get();
        return view('frontend.lakip', compact('lakip'));
    }

    public function monograph()
    {
        $monograph = DistrictMonograph::get();
        return view('frontend.monograph', compact('monograph'));
    }

    public function vision_mission()
    {
        $vm = VisionMission::get();
        return view('frontend.vision-mission', compact('vm'));
    }

    public function organizational_structure()
    {
        $org = OrganizationalStructure::get();
        return view('frontend.organizational-structure', compact('org'));
    }

    public function employee()
    {
        $employee = DistrictEmployee::orderBy('id')->get();
        return view('frontend.employee', compact('employee'));
    }

    public function gallery_photo()
    {
        $gallery = GalleryPhoto::where('status', '1')->orderBy('id', 'desc')->get();
        return view('frontend.gallery-photo', compact('gallery'));
    }

    public function detail_gallery_photo($id)
    {
        $gallery = GalleryPhoto::with('detail')->where('id', Crypt::decrypt($id))->first();
        return view('frontend.detail-gallery-photo', compact('gallery'));
    }

    public function urban_village($slug)
    {
        $uv = UrbanVillage::with('monograph', 'employee', 'potency')->where('slug', $slug)->first();
        return view('frontend.urban-village', compact('uv'));
    }

    public function service()
    {
        $service = Service::orderBy('id')->get();
        return view('frontend.service', compact('service'));
    }

    public function news()
    {
        $news = News::where('status', '1')->orderBy('id', 'desc')->get();
        return view('frontend.news', compact('news'));
    }
    
    public function detail_news($id)
    {
        $news = News::where('id', Crypt::decrypt($id))->first();
        return view('frontend.detail-news', compact('news'));
    }

    public function get_service(Request $request)
    {
        $service = Service::find($request->id);
        return response()->json(['data' => $service]);
    }

    public function e_layanan() 
    {
        return view('frontend.e-service');
    }

    public function iumk()
    {
        $iumk = Iumk::orderBy('id', 'desc')->get();
        return view('frontend.iumk', compact('iumk'));
    }

    public function comment()
    {
        return view('frontend.comment');
    }

    public function post_comment(Request $request)
    {
        try {
            Comment::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'comment' => $request->comment
            ]);
    
            return response()->json(['message' => 'email sent successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }
}
