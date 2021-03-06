<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
        //$content1="ini judul";
        //$content2="ini konten";
        /*return view('home')->with('showcontent', $content)
        */
        //return view('home')->with('showcontent', compact('content1', 'content2'));
        //
    }

    public function login()
    {
        return view('template/login');
        //$content1="ini judul";
        //$content2="ini konten";
        /*return view('home')->with('showcontent', $content)
        */
        //return view('home')->with('showcontent', compact('content1', 'content2'));
        //
    }
     public function register()
    {
        return view('template/register');
        //$content1="ini judul";
        //$content2="ini konten";
        /*return view('home')->with('showcontent', $content)
        */
        //return view('home')->with('showcontent', compact('content1', 'content2'));
        //
    }

    public function profile()
    {
        return view('template/profile');
    }

    public function edit()
    {
        return view('template/edit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function edit($id)
    {
        //
    }
*/
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
