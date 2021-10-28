<?php

namespace App\Http\Controllers\AdminControlls;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest\AddProjectRequest;
use App\Models\AdminModels\Projects;
use App\Models\AdminModels\Staff;
use App\Models\Projects\project_members;
use App\Service\AdminProjectService;
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
        $developers = Staff::all();
        // dd($developers);
        return view('projects.create', ["developers" => $developers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProjectRequest $request,AdminProjectService $service)
    {

        if($service->add_new_project($request))
        {
            $notification = array(
                'message' => 'Project created successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else {
            $notification = array(
                'message' => 'Something Looks Wrong Check All Inputs!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
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
