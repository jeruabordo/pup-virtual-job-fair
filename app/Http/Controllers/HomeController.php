<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
<<<<<<< HEAD

=======
    // try lang
>>>>>>> fbaa36e37f0fd4059e84c8a7e56980374043646a
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
        return view('dashboard.profile');
    }
}
