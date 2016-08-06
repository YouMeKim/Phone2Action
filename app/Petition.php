<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    public function signatures() {
        return $this->hasMany('App\Signature');
    }

    public function fields() {
        return $this->hasMany('App\PetitionField');
    }

    public function assets() {
        return $this->hasMany('App\PetitionAsset');
    }
}
