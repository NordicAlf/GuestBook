<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestBook extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'text',
        'created_at'
    ];
}