<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        return view('backend.dashboard', compact('visitor', 'today', 'this_week', 'this_month'));
    }
}