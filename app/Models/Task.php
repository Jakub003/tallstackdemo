<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Models\Message;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', 'type', 'tag', 'title', 'is_completed'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
