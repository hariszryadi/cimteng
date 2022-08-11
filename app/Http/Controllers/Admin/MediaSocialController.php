<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MediaSocial;
use DataTables;

class MediaSocialController extends Controller
{
    protected $_view = 'backend.media-social.form';

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $medsos = MediaSocial::get();
        return view($this->_view)->with(compact('medsos'));
    }

    public function update(Request $request)
    {
        MediaSocial::where('id', $request->id)->update([
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube
        ]);

        return redirect()->back()->with('success', 'Success Message');
    }
}
