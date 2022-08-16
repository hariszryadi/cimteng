<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypePotency;
use DataTables;

class TypePotencyController extends Controller
{
    protected $_view = 'backend.master.type-potency.';

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(TypePotency::orderBy('id')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    // if (auth()->user()->roles()->first()->permission_role()->byId(9)->first()->update_right == true) {
                        $x .= '<li>
                                    <a href="/admin/master/type-potency/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
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
            'name' => 'required'
        ]);

        $data = TypePotency::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.master.typePotency.index')->with('success', 'Success Message');
    }

    public function edit($id)
    {
        $type = TypePotency::find($id);
        return view($this->_view.'form')->with(compact('type'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        TypePotency::where('id', $request->id)->update([
            'name' => $request->name
        ]);

        return redirect()->route('admin.master.typePotency.index')->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $type = TypePotency::where('id', $request->id);
        $type->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }
}
