<?php

namespace App\Http\Controllers\Admin\Cms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use DataTables;
use File;

class NewsController extends Controller
{
    protected $_view = 'backend.cms.news.';
    protected $_route = 'admin.cms.news.index';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:read news', ['only' => ['index']]);
        $this->middleware('permission:create news', ['only' => ['create', 'store']]);
        $this->middleware('permission:edit news', ['only' => ['edit', 'update', 'update_status']]);
        $this->middleware('permission:delete news', ['only' => ['destroy']]);
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(News::orderBy('id', 'desc')->get())
                ->addColumn('action', function($data){
                    $x = '';
                    if (auth()->user()->can('edit news')) {
                        $x .= '<li>
                                    <a href="/admin/cms/news/'.$data->id .'/edit"><i class="icon-pencil5 text-primary"></i> Edit</a>
                                </li>';
                    }
                    if (auth()->user()->can('delete news')) {
                        $x .= '<li>
                                    <a href="javascript:void(0)" id="delete" data-id="'.$data->id.'" data-image="' . $data->image . '"><i class="icon-bin text-danger"></i> Hapus</a>
                                </li>';
                    }

                    if (auth()->user()->can('edit news') ||
                        auth()->user()->can('delete news')) {
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
            'title' => 'required',
            'image' => 'required',
            'content' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('news', ['disk' => 'public']);
        }

        $data = News::create([
            'title' => $request->title,
            'image' => $path,
            'content' => $request->content,
            'status' => '1'
        ]);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function edit($id)
    {
        $news = News::find($id);
        if (!$news) {
            return abort(404);
        }
        return view($this->_view.'form')->with(compact('news'));
    }

    public function update(Request $request)
    {
        $data = [];
        $image = $request->file('image');
        $news = News::where('id', $request->id);

        if ($image != '') {
            $path = $request->file('image')->store('news', ['disk' => 'public']);
            $image = $news->first()->image;
            $data['image'] = $path;
            $path = \storage_path('app/public/' . $image);
            File::delete($path);
        }

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $data['title'] = $request->title;
        $data['content'] = $request->content;

        $news->update($data);

        return redirect()->route($this->_route)->with('success', 'Success Message');
    }

    public function destroy(Request $request)
    {
        $news = News::where('id', $request->id);
        $path = \storage_path('app/public/' . $request->image);
        File::delete($path);
        $news->delete();

        return response()->json(['success' => 'Delete Data Successfully']);
    }

    public function update_status(Request $request)
    {
        $news = News::find($request->id);
        if ($news->status == '1') {
            $news->update(['status' => '0']);
        } else {
            $news->update(['status' => '1']);
        }
        
        return response()->json(['success' => 'Update Status Successfully']);
    }
}
