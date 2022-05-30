<?php

namespace Modules\Game\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Code extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'count'
    ];

    protected static function newFactory()
    {
        return \Modules\Game\Database\factories\CodeFactory::new();
    }
}
