<?php

namespace App\Http\Controllers\Admin\Cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;
use DataTables;
use File;

class BannerController extends Controller
{
    protected $_view = 'backend.cms.banner.';
    protected $_route = 'admin.cms.banner.index';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:read banner', ['only' => ['index']]);
        $this->middleware('permission:create banner', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit banner', ['only' => ['edit', 'update', 'update_status']]);
        $this->middleware('permission:delete banner', ['only' => ['destroy']]);
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Banner::orderBy('id', 'desc')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    if (auth()->user()->can('edit banner')) {
                        $x .= '<li>
                                    <a href="/admin/cms/banner/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                </li>';
                    }
                    if (auth()->user()->can('delete banner')) {
                        $x .= '<li>
                                    <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" data-image="' . $data->image . '"><i class="icon-bin text-danger"></i> Hapus</a>
                                </li>';
                    }

                    if (auth()->user()->can('edit banner') ||
                        auth()->user()->can('delete banner')) {
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
        $this->validate($request, [
            'image' => 'required',
            'caption_primary' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('banner', ['disk' => 'public']);
        }

        $data = Banner::create([
            'image' => $path,
            'caption_primary' => $request->caption_primary,
            'caption_secondary' => $request->caption_secondary,
            'status' => '1'
        ]);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        if (!$banner) {
            return abort(404);
        }
        return view($this->_view.'form')->with(compact('banner'));
    }

    public function update(Request $request)
    {
        $data = [];
        $image = $request->file('image');
        $banner = Banner::where('id', $request->id);

        if ($image != '') {
            $path = $request->file('image')->store('banner', ['disk' => 'public']);
            $image = $banner->first()->image;
            $data['image'] = $path;
            $path = \storage_path('app/public/' . $image);
            File::delete($path);
        }

        $this->validate($request, [
            'caption_primary' => 'required'
        ]);

        $data['caption_primary'] = $request->caption_primary;
        $data['caption_secondary'] = $request->caption_secondary;

        $banner->update($data);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $banner = Banner::where('id', $request->id);
        $path = \storage_path('app/public/' . $request->image);
        File::delete($path);
        $banner->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }

    public function update_status(Request $request)
    {
        $banner = Banner::find($request->id);
        if ($banner->status == '1') {
            $banner->update(['status' => '0']);
        } else {
            $banner->update(['status' => '1']);
        }
        
        return response()->json(['success' => 'Update Status Successfully']);
    }
}
