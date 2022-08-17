<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VisionMission;
use DataTables;

class VisionMissionController extends Controller
{
    protected $_view = 'backend.vision-mission.';
    protected $_route = 'admin.visionMission.index';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(VisionMission::get())
                ->addColumn('action', function($data){
                    $x = '';
                    // if (auth()->user()->roles()->first()->permission_role()->byId(7)->first()->update_right == true) {
                        $x .= '<li>
                                    <a href="/admin/vision-mission/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                </li>';
                    // }
                    return '<ul class="icons-list">
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right text-center">
                                        '.$x.'
                                    </ul>
                                </li>
                            </ul>';
                })
                ->make(true);
        }

        return view($this->_view.'index');
    }

    public function edit($id)
    {
        $vm = VisionMission::find($id);
        return view($this->_view.'form')->with(compact('vm'));
    }

    public function update(Request $request)
    {
        $data = [];
        $vm = VisionMission::where('id', $request->id);

        $this->validate($request, [
            'vision' => 'required',
            'mission' => 'required'
        ]);

        $data['vision'] = $request->vision;
        $data['mission'] = $request->mission;

        $vm->update($data);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }
}
