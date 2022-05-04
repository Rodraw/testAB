<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function indexA(){


        return view('test.userA');
    }

    public function indexB(){


        return view('test.userB');
    }


}
