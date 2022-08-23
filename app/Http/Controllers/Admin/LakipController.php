<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lakip;
use DataTables;

class LakipController extends Controller
{
    protected $_view = 'backend.district.lakip.';
    protected $_route = 'admin.district.lakip.index';

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Lakip::orderBy('id', 'desc')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    // if (auth()->user()->roles()->first()->permission_role()->byId(9)->first()->update_right == true) {
                        $x .= '<li>
                                    <a href="/admin/district/lakip/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                </li>';
                    // }
                    // if (auth()->user()->roles()->first()->permission_role()->byId(9)->first()->delete_right == true) {
                        $x .= '<li>
                                    <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'"><i class="icon-bin text-danger"></i> Hapus</a>
                                </li>';
                    // }

                    // if (auth()->user()->roles()->first()->permission_role()->byId(9)->first()->update_right == true ||
                        // auth()->user()->roles()->first()->permission_role()->byId(9)->first()->delete_right == true) {
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
                    // }
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
            'year' => 'required|unique:lakip',
            'source' => 'required'
        ]);

        $data = Lakip::create([
            'year' => $request->year,
            'source' => $request->source
        ]);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function edit($id)
    {
        $lakip = Lakip::find($id);
        return view($this->_view.'form')->with(compact('lakip'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'year' => 'required|unique:lakip,year,'.$request->id,
            'source' => 'required'
        ]);

        Lakip::where('id', $request->id)->update([
            'year' => $request->year,
            'source' => $request->source
        ]);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $type = Lakip::where('id', $request->id);
        $type->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }
}
