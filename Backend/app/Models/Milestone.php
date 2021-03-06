<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\Project;

class Milestone extends Model
{
    use HasFactory;


    public function task(){

       return $this->hasMany(Task::class);
    }

    public function project(){

       return $this->belongsTo(Project::class);
    }
}
