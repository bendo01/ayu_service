<?php

namespace App\Http\Controllers;
use App\Models\User;

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

    public function index() {
        // $datas = User::paginate();
        $datas = USer::all();
        return response()->json($datas);
    }
}
