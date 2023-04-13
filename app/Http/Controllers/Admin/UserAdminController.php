<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DataTables;
use File;

class UserAdminController extends Controller
{
    protected $trash;
    protected $disabled;
    protected $_view = 'backend.user-admin.';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:read user', ['only' => ['index']]);
        $this->middleware('permission:create user', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit user', ['only' => ['edit', 'update']]);
        $this->middleware('permission:delete user', ['only' => ['destroy']]);
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(User::with('roles')->orderBy('id')->get())
                ->addColumn('action', function($data){
                    if ($data->email == 'superadmin@cimahitengah.id') {
                        $this->disabled = 'disabled';
                        $this->trash = 'text-secondary';
                    } else {
                        $this->disabled = '';
                        $this->trash = 'text-danger';
                    }

                    $x = '';
                    if (auth()->user()->can('edit user')) {
                        $x .= '<li>
                                <a href="/admin/user-admin/'.$data->id.'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                            </li>';
                    }
                    if (auth()->user()->can('delete user')) {
                        $x .= '<li class="'.$this->disabled.'">
                            <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" data-image="'.$data->avatar.'" '.$this->disabled.'><i class="icon-bin '.$this->trash.'"></i> Hapus</a>
                        </li>';
                    }

                    if (auth()->user()->can('edit user') ||
                        auth()->user()->can('delete user')) {
                        return '<ul class="icons-list">
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right text-center">
                                            '.$x.'
                                        </div>
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
        $role = Role::orderBy('id')->get();
        return view($this->_view.'create')->with(compact('role'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'role' => 'required'
        ]);

        $path = null;
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatar', ['disk' => 'public']);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $path
        ]);

        $role = Role::find($request->role);
        $user->assignRole($role);

        return redirect()->route('admin.userAdmin.index')->with('success', 'Success Message');
    }

    public function edit($id)
    {
        $userAdmin = User::with('roles')->find($id);
        $role = Role::orderBy('id')->get();
        if (!$userAdmin) {
            return abort(404);
        }
        return view($this->_view.'edit')->with(compact('userAdmin', 'role'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
        ]);

        $data = [];
        $password = $request->password;
        $avatar = $request->file('avatar');
        $userAdmin = User::where('id', $request->id);

        if ($password != '') {
            $data['password'] = Hash::make($password);
        }

        if ($avatar != '') {
            $path = $request->file('avatar')->store('avatar', ['disk' => 'public']);
            $avatar = $userAdmin->first()->avatar;
            $data['avatar'] = $path;
            $path = \storage_path('app/public/' . $avatar);
            File::delete($path);
        }

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;

        $userAdmin->update($data);

        $role = Role::find($request->role);
        $user = User::find($request->id);
        $user->syncRoles($role);

        return redirect()->route('admin.userAdmin.index')->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $userAdmin = User::where('id', $request->id);
        $path = \storage_path('app/public/' . $request->image);
        File::delete($path);
        $userAdmin->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }
}
