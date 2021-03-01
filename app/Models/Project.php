<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Task;

class Project extends Model
{
    use HasFactory;

    // in protectd fillable define column names
    // If column name are not defined in this aaray we are unable to store data in database.
    protected $fillable = [
         'id', 'name', 'icon', 'color'
    ];
}
