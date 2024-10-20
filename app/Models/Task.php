<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',        // Title of the task
        'description',  // Description of the task
        'completed',    // Indicates if the task is completed (boolean)
    ];

    // Optional: Add a scope to filter completed tasks
    public function scopeCompleted($query)
    {
        return $query->where('completed', true);
    }

    // Optional: Add a scope to filter uncompleted tasks
    public function scopeUncompleted($query)
    {
        return $query->where('completed', false);
    }
}
