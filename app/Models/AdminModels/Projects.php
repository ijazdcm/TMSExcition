<?php

namespace App\Models\AdminModels;

use App\Models\Projects\project_members;
use App\Models\AdminModels\Staff;
use Database\Factories\ProjectsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $table = "projects";
    protected $fillable = [
        "project_tittle",
        "client_name",
        "days",
        "description",
        "start_date",
        "end_date",
        "urrent_status",
        "completion_percentage",
    ];


    protected static function newFactory()
    {
        return ProjectsFactory::new();
    }


    public function project_members()
    {
        return $this->hasManyThrough(Staff::class, project_members::class, 'project_id', 'id', 'id', 'member_id');
    }
}
