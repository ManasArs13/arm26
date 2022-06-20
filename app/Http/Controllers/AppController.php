<?php

namespace App\Http\Controllers;


class AppController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
      return view('admin/admin');
    }

    public function index()
    {
      return view('index');
    }
}
