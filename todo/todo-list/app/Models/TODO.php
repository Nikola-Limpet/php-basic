<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TODO extends Model
{
    use HasFactory;

    protected $table = 'todos';

    protected $fillable = ['title', 'description', 'completed'];

    protected function casts(): array
    {
        return [
            'completed' => 'boolean',
        ];
    }
}
