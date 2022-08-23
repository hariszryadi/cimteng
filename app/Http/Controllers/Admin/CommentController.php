<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use DataTables;

class CommentController extends Controller
{
    protected $_view = 'backend.comment.';

    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        if (request()->ajax()) {
            return Datatables::of(Comment::orderBy('id', 'desc')->get())
                ->make(true);
        }

        return view($this->_view.'index');
    }
}
