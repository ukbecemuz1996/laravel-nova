<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_category_relations', 'project_category_id', 'project_id');
    }
}
