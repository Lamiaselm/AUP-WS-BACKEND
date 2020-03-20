<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $application=Application::all();
        return responce()->json($application);
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
        $application=Application::all();

        $application=new Application ();
        $application->nom=$request->nom;
        $application->prenom=$request->prenom;
        $application->email=$request->email;
        $application->tshirt=$request->tshirt;
        $application->abt_urslf=$request->abt_urslf;
        $application->why_aup=$request->why_aup;
        $application->team=$request->team;
        $application->cv=$request->cv;
        $application->github=$request->github;
        $application->linkedin=$request->linkedin;
        $application->comments=$request->comments;
        
        $application->save();
        return responce()->json($application);

        

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
    public function edit($id)
    {
        //
    }

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
