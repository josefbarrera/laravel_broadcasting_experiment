<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\EmitScriptOutput;
use App\Models\BashScript;
use App\Models\ScriptOutput;

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
        return view('home');
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

    public function getLatestMessages()
    {
        // Get the latest 15 items and sort them by id
        $output = ScriptOutput::latest()->take(15)->get();
        $output = $output->sortBy('id');

        $messages = [];
        foreach ($output as $message) {
            $messages[] = json_decode($message->data);
        }

        return response()->json($messages);
    }
}
