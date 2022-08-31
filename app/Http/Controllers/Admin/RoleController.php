<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use DataTables;

class RoleController extends Controller
{
    protected $_view = 'backend.role.';

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('permission:read role', ['only' => ['index']]);
        $this->middleware('permission:create role', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit role', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete role', ['only' => ['destroy']]);
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Role::orderBy('id')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    if (auth()->user()->can('edit role')) {
                        $x .= '<li>
                                    <a href="/admin/role/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                </li>';
                    }
                    if (auth()->user()->can('delete role')) {
                        $x .= '<li>
                                    <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'"><i class="icon-bin text-danger"></i> Hapus</a>
                                </li>';
                    }

                    if (auth()->user()->can('edit role') ||
                        auth()->user()->can('delete role')) {
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
        $permissions = Permission::orderBy('id')->get();
        return view($this->_view.'form')->with(compact('permissions'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $role = Role::create(['name' => $request->name]);
        foreach ($request->permission as $key => $value) {
            $role->givePermissionTo($value);
        }

        return redirect()->route('admin.role.index')->with('success', 'Success Message');
    }

    public function edit($id)
    {
        $role = Role::with('permissions')->find($id);
        $permissions = Permission::orderBy('id')->get();
        if (!$role) {
            return abort(404);
        }
        return view($this->_view.'form')->with(compact('role', 'permissions'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $role = Role::find($request->id);
        $role->name = $request->name;
        $role->syncPermissions($request->permission);
        $role->update();

        return redirect()->route('admin.role.index')->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $role = Role::where('id', $request->id);
        $role->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }
}
