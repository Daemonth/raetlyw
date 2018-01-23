<?php

namespace App\Http\Controllers;

use App\Model\comment;
use App\Model\CommentModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = CommentModel::instance()->select([['cid',8]]);
        return view('home');
    }
}
