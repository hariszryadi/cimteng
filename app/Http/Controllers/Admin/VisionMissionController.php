<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\VisionMission;
use DataTables;

class VisionMissionController extends Controller
{
    protected $_view = 'backend.district.vision-mission.';
    protected $_route = 'admin.district.visionMission.index';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:read vision mission', ['only' => ['index']]);
        $this->middleware('permission:edit vision mission', ['only' => ['edit', 'update']]);
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(VisionMission::get())
                ->addColumn('action', function($data){
                    $x = '';
                    if (auth()->user()->can('edit vision mission')) {
                        return '<ul class="icons-list">
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right text-center">
                                            <li>
                                                <a href="/admin/district/vision-mission/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>';
                    }
                })
                ->make(true);
        }

        return view($this->_view.'index');
    }

    public function edit($id)
    {
        $vm = VisionMission::find($id);
        if (!$vm) {
            return abort(404);
        }
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
