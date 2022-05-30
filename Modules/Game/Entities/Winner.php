<?php

namespace Modules\Game\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Winner extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobile',
        'code'
    ];

    protected static function newFactory()
    {
        return \Modules\Game\Database\factories\WinnerFactory::new();
    }
}
