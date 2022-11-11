<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";

    public function categories()
    {
        return $this->belongsToMany(ProjectCategory::class, 'project_category_relations', 'project_id', 'project_category_id')->withTimestamps();
    }
}
