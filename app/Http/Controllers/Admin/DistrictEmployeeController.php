<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DistrictEmployee;
use DataTables;
use File;

class DistrictEmployeeController extends Controller
{
    protected $_view = 'backend.district.employee.';
    protected $_route = 'admin.district.employee.index';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:read district employee', ['only' => ['index']]);
        $this->middleware('permission:create district employee', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit district employee', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete district employee', ['only' => ['destroy']]);
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(DistrictEmployee::orderBy('id')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    if (auth()->user()->can('edit district employee')) {
                        $x .= '<li>
                                    <a href="/admin/district/employee/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                </li>';
                    }
                    if (auth()->user()->can('delete district employee')) {
                        $x .= '<li>
                                    <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" data-avatar="' . $data->avatar . '"><i class="icon-bin text-danger"></i> Hapus</a>
                                </li>';
                    }

                    if (auth()->user()->can('edit district employee') ||
                        auth()->user()->can('delete district employee')) {
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
                    }
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
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('district/employee', ['disk' => 'public']);
        }

        $data = DistrictEmployee::create([
            'avatar' => $path,
            'name' => $request->name,
            'position' => $request->position,
            'rank' => $request->rank,
            'education' => $request->education
        ]);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function edit($id)
    {
        $employee = DistrictEmployee::find($id);
        if (!$employee) {
            return abort(404);
        }
        return view($this->_view.'form')->with(compact('employee'));
    }

    public function update(Request $request)
    {
        $data = [];
        $avatar = $request->file('avatar');
        $employee = DistrictEmployee::where('id', $request->id);

        if ($avatar != '') {
            $path = $request->file('avatar')->store('district/employee', ['disk' => 'public']);
            $avatar = $employee->first()->avatar;
            $data['avatar'] = $path;
            $path = \storage_path('app/public/' . $avatar);
            File::delete($path);
        }

        $data['name'] = $request->name;
        $data['position'] = $request->position;
        $data['rank'] = $request->rank;
        $data['education'] = $request->education;

        $employee->update($data);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $employee = DistrictEmployee::where('id', $request->id);
        $path = \storage_path('app/public/' . $request->avatar);
        File::delete($path);
        $employee->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }
}
