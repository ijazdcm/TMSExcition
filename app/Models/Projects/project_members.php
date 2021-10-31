<?php

namespace App\Models\Projects;

use Database\Factories\project_membersFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_members extends Model
{
    use HasFactory;

    protected $table = "project_members";
    protected $fillable = ["project_id", "member_id"];
    public $timestamps = false;

    protected static function newFactory()
    {
        return project_membersFactory::new();
    }
}
