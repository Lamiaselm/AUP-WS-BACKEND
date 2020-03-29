<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Illuminate\Support\Facades\DB;

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
        return response()->json($application);
    }
    public function indexID($id_app)
    {
        $application=Application::find($id_app);
        return response()->json($application);
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
     * Store a newly created resource 
     * in storage.
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
        return response()->json($application);

        

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
    
    public function updateAccept($id_app)
    {     
        $reject = DB::table('applications')->where('id_app', $id_app)->value('reject');
          if ($reject==0){
        Application::where('id_app',$id_app)->update(
            [
                'accept'=>'1',
            ]
            );
        } else {
            Application::where('id_app',$id_app)->update(
                [
                    'reject'=>'0',
                    'accept'=>'1',
                ]
                );
        }
    }
    public function updateReject($id_app)
    {  
        $accept = DB::table('applications')->where('id_app', $id_app)->value('accept');
        if ($accept==0){
      Application::where('id_app',$id_app)->update(
          [
              'reject'=>'1',
          ]
          );
      } else {
          Application::where('id_app',$id_app)->update(
              [
                  'accept'=>'0',
                  'reject'=>'1',
              ]
              );
      }
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
    public function old($id_app)
    {
        $application=Application::find($id_app);
        $application->nom=$request->flash();
        $application->prenom=$request->flash();
        $application->email=$request->flash();
        $application->tshirt=$request->flash();
        $application->abt_urslf=$request->flash();
        $application->why_aup=$request->flash();
        $application->team=$request->flash();
        $application->cv=$request->flash();
        $application->github=$request->flash();
        $application->linkedin=$request->flash();
        $application->comments=$request->flash();
        return response()->json($application);
    }
}
