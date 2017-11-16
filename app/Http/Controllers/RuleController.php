<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;
use App\Rule;
use App\User;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//(条件分岐createかedit)
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rule = new Rule;
        return view('process.ruleCreate',[
            'rule' => $rule,
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
        $rule = new Rule;
        $id = $request->session()->get('project_id');
        $rule->project_id = $id;
        
            $rule->testingEnvironment = $request->testingEnvironment;
            $rule->productionEnvironment = $request->productionEnvironment;
            $rule->browser = $request->browser;
            $rule->documentType = $request->documentType;
            $rule->encode = $request->encode;
            $rule->inHead = $request->inHead;
            $rule->directory = $request->directory;
            $rule->namingRule = $request->namingRule;
            $rule->responsive = $request->responsive;
            $rule->prohibited = $request->prohibited;
            $rule->complement = $request->complement;
       
            $rule->save();
    
        return redirect()->route('rule.edit', ['id' => $id]);
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
        //プロジェクトの制作ルール
        $project=Project::find($id);
        $rules = $project->rule()->orderBy('created_at', 'desc')->paginate(10);
        
        //navbar内に表示するユーザのプロジェクト一覧
        $user = \Auth::user();
        $projects = $user->projects()->orderBy('created_at', 'desc')->paginate(10);
        
        
        $data = [
                'projects' => $projects,
                'project' => $project,
                'rules' => $rules,
            ];
        
        return view('process.index', $data);
        
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
