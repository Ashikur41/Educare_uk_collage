<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coursetitle extends Model
{
    protected $guarded = [];
    
    public function language() {
        return $this->belongsTo('App\Models\Language');
    }
}
