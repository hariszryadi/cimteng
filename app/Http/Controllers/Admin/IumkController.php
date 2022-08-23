<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Iumk;
use App\Models\UrbanVillage;
use DataTables;

class IumkController extends Controller
{
    protected $_view = 'backend.iumk.';

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Iumk::with('urban_village')->orderBy('id', 'desc')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    // if (auth()->user()->roles()->first()->permission_role()->byId(9)->first()->update_right == true) {
                        $x .= '<li>
                                    <a href="/admin/iumk/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
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
        $urban_village = UrbanVillage::orderBy('id')->get();
        return view($this->_view.'form')->with(compact('urban_village'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'no_iumk' => 'required',
            'name_company' => 'required',
            'location_company' => 'required',
            'merchandise' => 'required',
            'urban_village_id' => 'required'
        ]);

        Iumk::create([
            'no_iumk' => $request->no_iumk,
            'name_company' => $request->name_company,
            'location_company' => $request->location_company,
            'merchandise' => $request->merchandise,
            'urban_village_id' => $request->urban_village_id
        ]);

        return redirect()->route('admin.iumk.index')->with('success', 'Success Message');
    }

    public function edit($id)
    {
        $iumk = Iumk::find($id);
        $urban_village = UrbanVillage::orderBy('id')->get();
        return view($this->_view.'form')->with(compact('iumk', 'urban_village'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'no_iumk' => 'required',
            'name_company' => 'required',
            'location_company' => 'required',
            'merchandise' => 'required',
            'urban_village_id' => 'required'
        ]);

        Iumk::where('id', $request->id)->update([
            'no_iumk' => $request->no_iumk,
            'name_company' => $request->name_company,
            'location_company' => $request->location_company,
            'merchandise' => $request->merchandise,
            'urban_village_id' => $request->urban_village_id
        ]);

        return redirect()->route('admin.iumk.index')->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $iumk = Iumk::where('id', $request->id);
        $iumk->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }
}
