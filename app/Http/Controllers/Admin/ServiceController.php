<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use DataTables;

class ServiceController extends Controller
{
    protected $_view = 'backend.service.';
    protected $_route = 'admin.service.index';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Service::orderBy('id', 'desc')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    // if (auth()->user()->roles()->first()->permission_role()->byId(7)->first()->update_right == true) {
                        $x .= '<li>
                                    <a href="/admin/service/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                </li>';
                    // }
                    // if (auth()->user()->roles()->first()->permission_role()->byId(7)->first()->delete_right == true) {
                        $x .= '<li>
                                    <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'"><i class="icon-bin text-danger"></i> Hapus</a>
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

    public function create()
    {
        return view($this->_view.'form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        Service::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view($this->_view.'form')->with(compact('service'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        Service::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $service = Service::where('id', $request->id);
        $service->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }
}
