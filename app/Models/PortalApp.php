<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortalApp extends Model
{
    protected $fillable = [
        'name',
        'url',
        'icon',
        'desc',
        'btn_text',
        'btn_class',
        'bg_class',
        'sort_order',
    ];
}
