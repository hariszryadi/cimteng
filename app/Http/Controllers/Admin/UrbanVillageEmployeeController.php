<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UrbanVillageEmployee;
use App\Models\UrbanVillage;
use DataTables;
use File;

class UrbanVillageEmployeeController extends Controller
{
    protected $_view = 'backend.urban-village.employee.';
    protected $_route = 'admin.urbanVillage.employee.index';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(UrbanVillageEmployee::with('urban_village')->orderBy('id')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    // if (auth()->user()->roles()->first()->permission_role()->byId(7)->first()->update_right == true) {
                        $x .= '<li>
                                    <a href="/admin/urban-village/employee/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                </li>';
                    // }
                    // if (auth()->user()->roles()->first()->permission_role()->byId(7)->first()->delete_right == true) {
                        $x .= '<li>
                                    <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" data-avatar="' . $data->avatar . '"><i class="icon-bin text-danger"></i> Hapus</a>
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
        $urban_village = UrbanVillage::orderBy('id')->get();
        return view($this->_view.'form')->with(compact('urban_village'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'urban_village_id' => 'required'
        ]);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('urban-village/employee', ['disk' => 'public']);
        }

        $data = UrbanVillageEmployee::create([
            'urban_village_id' => $request->urban_village_id,
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
        $urban_village = UrbanVillage::orderBy('id')->get();
        $employee = UrbanVillageEmployee::find($id);
        return view($this->_view.'form')->with(compact('employee', 'urban_village'));
    }

    public function update(Request $request)
    {
        $data = [];
        $avatar = $request->file('avatar');
        $employee = UrbanVillageEmployee::where('id', $request->id);

        if ($avatar != '') {
            $path = $request->file('avatar')->store('urban-village/employee', ['disk' => 'public']);
            $avatar = $employee->first()->avatar;
            $data['avatar'] = $path;
            $path = \storage_path('app/public/' . $avatar);
            File::delete($path);
        }

        $data['urban_village_id'] = $request->urban_village_id;
        $data['name'] = $request->name;
        $data['position'] = $request->position;
        $data['rank'] = $request->rank;
        $data['education'] = $request->education;

        $employee->update($data);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $employee = UrbanVillageEmployee::where('id', $request->id);
        $path = \storage_path('app/public/' . $request->avatar);
        File::delete($path);
        $employee->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }
}
