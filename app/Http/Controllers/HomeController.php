<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return redirect()->route('todo.index');
        //$todos = Todo::where('user_id', Auth::user()->id)->orderBy('created_at','desc')->get();
        //return view('home', compact('todos'));

        //$users = User::orderBy('id','desc')->paginate(5);
        //return view('user_crud_index', compact('users'));

    }
}
