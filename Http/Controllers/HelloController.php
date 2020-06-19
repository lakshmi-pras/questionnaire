<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*class HelloController extends Controller
{
    public function index()
    {
        $coolstring='hello from routes got it.';

        return view('hello')->with('coolstring',$coolstring);
    }
}*/

/*class HelloController extends Controller
{
    public function index()
    {
        return view('app');
    }
}


class HelloController extends Controller
{
    public function index()
    {
        return view('about');
    }
}
*/
 
class HelloController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        /*$services=[
            'service1',
            'service2',
        ];*/
        return view('services');
    }
}
