<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortalAppClick extends Model
{
    protected $fillable = [
        'portal_app_id',
        'ip_address',
        'user_agent',
    ];

    public function portalApp()
    {
        return $this->belongsTo(PortalApp::class, 'portal_app_id');
    }
}
