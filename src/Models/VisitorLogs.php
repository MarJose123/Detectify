<?php

namespace MarJose123\Detectify\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorLogs extends Model
{
    protected $fillable = [
        'user_agent',
        'os_type',
        'visited_path_page',
        'authenticated_request',
        'user_id',
    ];

    protected function casts(): array
    {
        return [
            'authenticated_request' => 'boolean',
            'user_id' => 'string',
        ];
    }
}
