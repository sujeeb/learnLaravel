<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {

        $testdata=Test::get();

        return view('test.test')->with('testdata',$testdata);
    }

    public function extract() {

        $extractdata=Test::where('name','Sujeeb')->where('phone','404213562')->first(); //always returns single object.
        // $a=Test::where('name','Sujeeb')->get(); //always returns array.
        // dd($a->name);

        dd($extractdata->name);
    }
}
