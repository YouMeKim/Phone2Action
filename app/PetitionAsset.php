<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetitionAsset extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'petitionid', 'type', 'location', 'title', 'description',
    ];

    public function petition() {
        return $this->belongsTo(Petition::class);
    }
}
