<?php

namespace MarJose123\Detectify\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorBan extends Model
{
    protected $fillable = [
        'ip_address',
        'until',
        'type',
        'more_details',
        'reasons',
    ];

    protected function casts(): array
    {
        return [
            'until' => 'datetime',
            'more_details' => 'array',
        ];
    }
}
