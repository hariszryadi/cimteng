<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrganizationalStructure;
use DataTables;
use File;

class OrganizationalStructureController extends Controller
{
    protected $_view = 'backend.district.organizational-structure.';
    protected $_route = 'admin.district.organizationalStructure.index';

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(OrganizationalStructure::get())
                ->addColumn('action', function($data){
                    $x = '';
                    // if (auth()->user()->roles()->first()->permission_role()->byId(7)->first()->update_right == true) {
                        $x .= '<li>
                                    <a href="/admin/district/organizational-structure/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
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
        $org = OrganizationalStructure::find($id);
        return view($this->_view.'form')->with(compact('org'));
    }

    public function update(Request $request)
    {
        $data = [];
        $file = $request->file('file');
        $org = OrganizationalStructure::where('id', $request->id);

        if ($file != '') {
            $path = $request->file('file')->store('organizational-structure', ['disk' => 'public']);
            $file = $org->first()->file;
            $data['file'] = $path;
            $path = \storage_path('app/public/' . $file);
            File::delete($path);
        }

        $org->update($data);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }
}
