<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_id', 'project_name', 'password', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
