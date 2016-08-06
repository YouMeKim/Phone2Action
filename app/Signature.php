<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'petitionid', 'firstname', 'lastname', 'email', 'phone', 'notified',
    ];

    public function petition() {
        return $this->belongsTo(Petition::class);
    }
}
