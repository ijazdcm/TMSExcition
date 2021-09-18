<?php

namespace App\Http\Controllers\AdminControlls;

use App\Http\Controllers\Controller;
use App\Models\AdminModels\Projects;
use App\Models\AdminModels\Staff;
use Illuminate\Http\Request;

class AdminProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //methode to view a index page for projects
        return view('projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //this methode shows the new project creation form
        $developers=Staff::all();
        return view('projects.create',["developers"=>$developers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "project_tittle"=>"required",
            "Client_name"=>"required",
            "days"=>"required|numeric",
            "project_description"=>"required",
            "start_date"=>"required",
            "end_date"=>"required",
            "developer"=>"required|numeric",
            "designer"=>"required|numeric"
        ]);

        $add_project=new Projects();
        $add_project->project_tittle=$request->project_tittle;
        $add_project->client_name=$request->Client_name;
        $add_project->days=$request->days;
        $add_project->description=$request->project_description;
        $add_project->start_date=$request->start_date;
        $add_project->end_date=$request->end_date;
        $add_project->to_dev=$request->developer;
        $add_project->to_des=$request->designer;
        $add_project->current_status=1;
        if($add_project->save())
        {
            return redirect()->back()->with('success',"New Project Added");
        }
        else
        {
            return redirect()->back()->with('error',"Something Looks Wrong Check All Inputs");
        }

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
