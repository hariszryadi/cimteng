<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UrbanVillagePotency;
use App\Models\UrbanVillage;
use App\Models\TypePotency;
use DataTables;

class UrbanVillagePotencyController extends Controller
{
    protected $_view = 'backend.urban-village.potency.';
    protected $_route = 'admin.urbanVillage.potency.index';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(UrbanVillagePotency::with('urban_village', 'type_potency')->orderBy('id', 'desc')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    // if (auth()->user()->roles()->first()->permission_role()->byId(7)->first()->update_right == true) {
                        $x .= '<li>
                                    <a href="/admin/urban-village/potency/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
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
        $urban_village = UrbanVillage::orderBy('id')->get();
        $type_potency = TypePotency::orderBy('id')->get();
        return view($this->_view.'form')->with(compact('urban_village', 'type_potency'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'urban_village_id' => 'required'
        ]);

        $data = UrbanVillagePotency::create([
            'urban_village_id' => $request->urban_village_id,
            'location' => $request->location,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'type_potency_id' => $request->type_potency_id
        ]);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function edit($id)
    {
        $urban_village = UrbanVillage::orderBy('id')->get();
        $potency = UrbanVillagePotency::find($id);
        $type_potency = TypePotency::orderBy('id')->get();
        return view($this->_view.'form')->with(compact('potency', 'urban_village', 'type_potency'));
    }

    public function update(Request $request)
    {
        $data = [];
        $potency = UrbanVillagePotency::where('id', $request->id);

        $data['urban_village_id'] = $request->urban_village_id;
        $data['location'] = $request->location;
        $data['rt'] = $request->rt;
        $data['rw'] = $request->rw;
        $data['type_potency_id'] = $request->type_potency_id;

        $potency->update($data);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $potency = UrbanVillagePotency::where('id', $request->id);
        $potency->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }
}
