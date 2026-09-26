<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    'task_name',
    'description',
    'status',
    'due_date',
];
    protected $casts = [
        'is_completed' => 'boolean',
        'due_date' => 'datetime',
    ];
}
