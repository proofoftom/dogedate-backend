<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doge extends Model
{
    protected $fillable = ['owned_by'];

    public function owner() {
        return $this->belongsTo(Owner::class);
    }

    public function genes() {
        return $this->belongsToMany(Gene::class);
    }
}
