<?php

namespace App\Models;

use App\Models\App_admin;
use App\Models\Club_manager;
use App\Models\Doctor;
use App\Models\Rule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor_personal_info extends Model
{
    use HasFactory;

    public function App_admin()
    {
        return $this->hasOne(App_admin::class);
    }
    public function Doctor()
    {
        return $this->hasOne(Doctor::class);
    }
    public function Club_manager()
    {
        return $this->hasOne(Club_manager::class);
    }
    public function Rule()
    {
        return $this->hasMany(Rule::class);
    }
}
