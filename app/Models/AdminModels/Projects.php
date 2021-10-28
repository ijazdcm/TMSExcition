<?php

namespace App\Models\AdminModels;

use App\Models\Projects\project_members;
use App\Models\AdminModels\Staff;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $table="projects";
    protected $fillable=[
        "project_tittle",
        "client_name",
        "days",
        "description",
        "start_date",
        "end_date",
        "urrent_status",
        "completion_percentage",
        "update_remarks",
    ];



    public function project_members()
    {
        return $this->hasManyThrough(Staff::class,project_members::class,'project_id','id','id','member_id');
    }
}
