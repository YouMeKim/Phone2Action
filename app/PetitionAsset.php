<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetitionAsset extends Model
{
    public function petition() {
        return $this->belongsTo(Petition::class);
    }
}
