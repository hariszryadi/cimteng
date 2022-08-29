<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skm;
use App\Models\Iumk;
use App\Models\News;
use App\Models\Video;
use App\Models\Lakip;
use App\Models\Banner;
use App\Models\Comment;
use App\Models\Visitor;
use App\Models\Service;
use App\Models\Greeting;
use App\Models\SkmAnswer;
use App\Models\MediaSocial;
use App\Models\UrbanVillage;
use App\Models\GalleryPhoto;
use App\Models\VisionMission;
use App\Models\NoTelpImportant;
use App\Models\DistrictEmployee;
use App\Models\DistrictMonograph;
use App\Models\OrganizationalStructure;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $unique_ip = true;
        $visitors = Visitor::all();
        foreach($visitors as $visitor){
            if($visitor->ip == request()->ip() && $visitor->visit_date == date('Y-m-d')){
                $unique_ip = false;
            }
        }
        if($unique_ip == true){
            $visitor = Visitor::create([
                'ip' => request()->ip(),
                'visit_date' => date('Y-m-d')
            ]);
        }
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
        $now = Carbon::now();
        $visitor = Visitor::count();
        $today = Visitor::where('visit_date', '=', $now->format('Y-m-d'))->count();
        $this_week = Visitor::whereBetween('visit_date', [
            $now->startOfWeek()->format('Y-m-d'),
            $now->endOfWeek()->format('Y-m-d')
         ])->count();
        $this_month = Visitor::whereMonth('visit_date', '=', date('m'))->count();
        $greeting = Greeting::get();
        $banners = Banner::where('status', '1')->orderBy('id')->get();
        $videos = Video::where('status', '1')->orderBy('id')->get();
        $news = News::where('status', '1')->orderBy('id')->get();
        $no_telp = NoTelpImportant::orderBy('id')->get();
        
        return view('frontend.index', compact('visitor', 'today', 'this_week', 'this_month', 'greeting', 'banners', 'videos', 'news', 'no_telp'));
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

    public function skm()
    {
        $skm = Skm::orderBy('id')->get();
        return view('frontend.skm', compact('skm'));
    }

    public function post_skm(Request $request)
    {
        // return dd($request->all());
        foreach ($request->answer as $key => $value) {
            foreach ($value as $k => $v) {
                SkmAnswer::create([
                    'skm_id' => $k,
                    'ip' => request()->ip(),
                    'answer' => $v
                ]);
            }
        }

        return redirect()->back()->with('success', 'Berhasil melakukan poling');
    }

    public function result_skm()
    {
        $skm = DB::select("SELECT
                    skm.id,
                    skm.question,
                    ( SELECT COUNT( * ) FROM skm_answers WHERE skm_id = skm.id AND answer = 1 ) AS very_good,
                    ( SELECT COUNT( * ) FROM skm_answers WHERE skm_id = skm.id AND answer = 2 ) AS good,
                    ( SELECT COUNT( * ) FROM skm_answers WHERE skm_id = skm.id AND answer = 3 ) AS enough,
                    ( SELECT COUNT( * ) FROM skm_answers WHERE skm_id = skm.id AND answer = 4 ) AS not_good
                FROM
                    skm
                    LEFT JOIN skm_answers ON skm.id = skm_answers.skm_id
                    GROUP BY skm.id, skm.question");
        return view('frontend.skm-result', compact('skm'));
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
