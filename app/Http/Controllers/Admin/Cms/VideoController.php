<?php

namespace App\Http\Controllers\Admin\Cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Video;
use DataTables;
use File;

class VideoController extends Controller
{
    protected $_view = 'backend.cms.video.';
    protected $_route = 'admin.cms.video.index';

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Video::orderBy('id', 'desc')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    // if (auth()->user()->roles()->first()->permission_role()->byId(7)->first()->update_right == true) {
                        $x .= '<li>
                                    <a href="/admin/cms/video/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                </li>';
                    // }
                    // if (auth()->user()->roles()->first()->permission_role()->byId(7)->first()->delete_right == true) {
                        $x .= '<li>
                                    <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" data-video="' . $data->video . '"><i class="icon-bin text-danger"></i> Hapus</a>
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
        return view($this->_view.'form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'caption' => 'required',
            'video' => 'required',
            'source' => 'required'
        ]);

        if ($request->hasFile('video')) {
            $path = $request->file('video')->store('video', ['disk' => 'public']);
        } else {
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $request->video, $matches);
            $path = $matches[1];
        }

        $data = Video::create([
            'caption' => $request->caption,
            'video' => $path,
            'source' => $request->source,
            'description' => $request->description,
            'status' => '1'
        ]);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function edit($id)
    {
        $video = Video::find($id);
        return view($this->_view.'form')->with(compact('video'));
    }

    public function update(Request $request)
    {
        $data = [];
        $video = Video::where('id', $request->id);

        if ($request->source == '1') {
            $dataVideo = $request->file('video');
            if ($dataVideo != '') {
                $path = $request->file('video')->store('video', ['disk' => 'public']);
                $dataVideo = $video->first()->video;
                $data['video'] = $path;
                $path = \storage_path('app/public/' . $dataVideo);
                File::delete($path);
            }
        } else {
            if ($request->video != null) {
                preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $request->video, $matches);
                $data['video'] = $matches[1];
            }
        }

        $this->validate($request, [
            'caption' => 'required',
        ]);

        $data['caption'] = $request->caption;
        $data['source'] = $request->source;
        $data['description'] = $request->description;

        $video->update($data);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $video = Video::find($request->id);
        if ($video->source == '1') {
            $path = \storage_path('app/public/' . $request->video);
            File::delete($path);
            $video->delete();
        } else {
            $video->delete();
        }

        return response()->json(['success' => 'Delete Data Successfully']);
    }

    public function update_status(Request $request)
    {
        $video = Video::find($request->id);
        if ($video->status == '1') {
            $video->update(['status' => '0']);
        } else {
            $video->update(['status' => '1']);
        }
        
        return response()->json(['success' => 'Update Status Successfully']);
    }
}
