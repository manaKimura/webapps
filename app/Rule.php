<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Project;

class Rule extends Model
{
    protected $fillable = ['project_id', 'testingEnvironment', 'productionEnvironment', 'browser', 'documentType', 'encode', 'inHead','directory','namingRule','responsive','prohibited','complement'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
