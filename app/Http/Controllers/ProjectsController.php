<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', [
            'projects' => $projects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project;
        
        return view('projects.create', [
            'project' => $project,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;
        $project->project_name = $request->project_name;
        $project->password = $request->password;
        $project->save();
        \Auth::user()->addProject($project->id);/*ユーザのidを参照にして、プロジェクトのidを中間テーブルのproject_idに追加*/
        return redirect('/');
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
    
    //プロジェクトのパスワード画面表示
    public function project_login($id)
    {
        $project = Project::find($id);
        
         return view('projects.project_login', [
            'project' => $project,
        ]);   
    }
    
    //プロジェクトのパスワード認証
    /*public function project_login($id)
    {
        $project = Project::find($id);
        
         return view('projects.project_login', [
            'project' => $project,
        ]);   
    }*/
    
    //プロジェクトのパスワード認証
    public function project_login_store(Request $request)
    {
        $project = Project::find($request->id);
        
        if ($request->password === $project->password) {
            \Auth::user()->addProject($request->id);
            return redirect()->back();
        }
        
        return redirect()->back();
    }
    
  
}
