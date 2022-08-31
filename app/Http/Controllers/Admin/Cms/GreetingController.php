<?php

namespace App\Http\Controllers\Admin\Cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Greeting;
use DataTables;
use File;

class GreetingController extends Controller
{
    protected $_view = 'backend.cms.greeting.';
    protected $_route = 'admin.cms.greeting.index';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Greeting::get())
                ->addColumn('action', function($data){
                    if (auth()->user()->can('edit greeting')) {
                        return '<ul class="icons-list">
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-menu9"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right text-center">
                                            <li>
                                                <a href="/admin/cms/greeting/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>';
                    }
                })
                ->make(true);
        }

        return view($this->_view.'index');
    }

    public function edit($id)
    {
        $greeting = Greeting::find($id);
        if (!$greeting) {
            return abort(404);
        }
        return view($this->_view.'form')->with(compact('greeting'));
    }

    public function update(Request $request)
    {
        $data = [];
        $photo = $request->file('photo');
        $greeting = Greeting::where('id', $request->id);

        if ($photo != '') {
            $path = $request->file('photo')->store('greeting', ['disk' => 'public']);
            $photo = $greeting->first()->photo;
            $data['photo'] = $path;
            $path = \storage_path('app/public/' . $photo);
            File::delete($path);
        }

        $this->validate($request, [
            'content' => 'required'
        ]);

        $data['content'] = $request->content;

        $greeting->update($data);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }
}
