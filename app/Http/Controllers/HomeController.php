<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\EmitScriptOutput;
use App\Models\BashScript;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['messages' => '']);
    }

    /**
     * Used to trigger a test event
     */
    public function scanRepo()
    {
        $script = new BashScript();
        $script->execute();
        return "ok";
    }
}
