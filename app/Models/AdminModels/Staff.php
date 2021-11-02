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
        "father_name",
        "mother_name",
        "adhar_number",
        "dob",
        "age",
        "gender",
        "martial_status",
        "staff_role",
        "Address",
        "profile_img",
        "phone_number",
        "email",
        "father_phone_number",
        "mother_phone_number",
        "experienceRadioBtn",
        "previous_company_name",
        "previous_company_salary",
        "education_qualification",
        "experience",
        "doj",
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
