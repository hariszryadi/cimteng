<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DetailGalleryPhoto;
use App\Models\GalleryPhoto;
use DataTables;
use File;

class GalleryPhotoController extends Controller
{
    protected $_view = 'backend.district.gallery-photo.';
    protected $_route = 'admin.district.galleryPhoto.index';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:read gallery photo', ['only' => ['index', 'show']]);
        $this->middleware('permission:create gallery photo', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit gallery photo', ['only' => ['edit', 'update', 'update_status']]);
        $this->middleware('permission:delete gallery photo', ['only' => ['destroy']]);
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(GalleryPhoto::orderBy('id', 'desc')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    if (auth()->user()->can('read gallery photo')) {
                        $x .= '<li>
                                <a href="javascript:void(0)" id="show" data-id="'.$data->id.'"><i class="icon-search4 text-success"></i> Show</a>
                            </li>';
                    }
                    if (auth()->user()->can('edit gallery photo')) {
                        $x .= '<li>
                                    <a href="/admin/district/gallery-photo/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                </li>';
                    }
                    if (auth()->user()->can('delete gallery photo')) {
                        $x .= '<li>
                                    <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'"><i class="icon-bin text-danger"></i> Hapus</a>
                                </li>';
                    }

                    if (auth()->user()->can('read gallery photo') ||
                        auth()->user()->can('edit gallery photo') ||
                        auth()->user()->can('delete gallery photo')) {
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
                ->editColumn('created_at', function($data) {
                    $date = $data->updated_at;
                    if ($date != null) {
                        $date->settings(['formatFunction' => 'translatedFormat']);
                        return $date->format('l, j F Y H:i:s');
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
            'title' => 'required'
        ]);

        $data = GalleryPhoto::create([
            'title' => $request->title,
            'status' => '1'
        ]);

        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $key => $value) {
                $path = $value->store('gallery-photo', ['disk' => 'public']);

                DetailGalleryPhoto::create([
                    'gallery_photo_id' => $data->id,
                    'photo' => $path
                ]);
            }
        }

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function show(Request $request)
    {
        $detail_gallery = DetailGalleryPhoto::where('gallery_photo_id', $request->id)->get();
        if (!$detail_gallery) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json(['data' => $detail_gallery], 200);
    }

    public function edit($id)
    {
        $gallery = GalleryPhoto::find($id);
        if (!$gallery) {
            return abort(404);
        }
        return view($this->_view.'form')->with(compact('gallery'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $gallery = GalleryPhoto::find($request->id);
        $detail_gallery = DetailGalleryPhoto::where('gallery_photo_id', $request->id)->get();
        $gallery->update([
            'title' => $request->title
        ]);

        if ($request->file('photo') != '') {
            foreach ($detail_gallery as $key => $value) {
                $path = \storage_path('app/public/' . $value->photo);
                File::delete($path);
                $value->delete();
            }

            foreach ($request->file('photo') as $key => $value) {
                $path = $value->store('gallery-photo', ['disk' => 'public']);

                DetailGalleryPhoto::create([
                    'gallery_photo_id' => $request->id,
                    'photo' => $path
                ]);
            }
        }

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $gallery = GalleryPhoto::where('id', $request->id);
        $detail_gallery = DetailGalleryPhoto::where('gallery_photo_id', $request->id)->get();
        foreach ($detail_gallery as $key => $value) {
            $path = \storage_path('app/public/' . $value->photo);
            File::delete($path);
        }
        $gallery->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }

    public function update_status(Request $request)
    {
        $gallery = GalleryPhoto::find($request->id);
        if ($gallery->status == '1') {
            $gallery->update(['status' => '0']);
        } else {
            $gallery->update(['status' => '1']);
        }
        
        return response()->json(['success' => 'Update Status Successfully']);
    }
}
