<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';

    public function destinations()
    {
        return $this->belongsTo(Destination::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
