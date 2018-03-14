<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Position;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'birthday',
        'position_id'
    ];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function position() {
        return $this->belongsTo('App\Position');
    }
}
