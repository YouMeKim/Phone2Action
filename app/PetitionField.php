<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetitionField extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'petitionid', 'type', 'title', 'value',
    ];

    public function petition() {
        return $this->belongsTo(Petition::class);
    }
}
