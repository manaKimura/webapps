<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Rule;

class Project extends Model
{
    protected $fillable = ['id', 'project_name', 'password'];
    
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_project', 'project_id', 'user_id')->withTimestamps();
    }
    
    public function rule()
    {
        return $this->hasOne(Rule::class);
    }
}
