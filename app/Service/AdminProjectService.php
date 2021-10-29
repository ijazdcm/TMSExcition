<?php

namespace App\Service;

use App\Models\AdminModels\Projects;
use App\Models\Projects\project_members;

class AdminProjectService
{

    //this function handle all teh new project adding to database
    public function add_new_project($request)
    {
        $project = Projects::create([
            'project_tittle' => $request->project_tittle,
            'client_name' => $request->Client_name,
            'days' => $request->days,
            'description' => $request->project_description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        $members_count = count($request->members);

        if ($project) {
            //section add the rows in project_members table
            for ($i = 0; $i < $members_count; $i++) {

                $project_members = new project_members();
                $project_members->project_id = $project->id;
                $project_members->member_id = $request->members[$i];
                $project_members->save();
            }

            return true;
        }
    }
}
