<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandPhoto extends Model
{
    protected $fillable = ['name'];

    public function JobBrand(){
        return $this->belongsTo('App\JobBrand');
    }
}
