<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test(Request $request)
    {
        $test = $request->input('test');

        return response()->json(['name' => 'Abigail', 'state' => 'CA']);
    }
}
