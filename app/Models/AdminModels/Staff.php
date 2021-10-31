<?php

namespace App\Models\AdminModels;

use App\Models\Projects\project_members;
use Database\Factories\StaffFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = "staff";
    protected $fillable = [
        "name",
        "middle_name",
        "last_name",
        "phone_number",
        "email",
        "Address",
        "profile_img",
        "staff_role",
        "active_status",
        "dl_status",
    ];


    protected static function newFactory()
    {
        return StaffFactory::new();
    }

    public function staff_Role()
    {
        return $this->hasOne(Roles::class, 'id', 'staff_role');
    }

    public function projects()
    {
        return $this->hasManyThrough(Projects::class, project_members::class, 'project_id', 'id', 'id', 'member_id');
    }
}
