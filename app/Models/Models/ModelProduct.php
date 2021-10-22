<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    protected $table='products';
    protected $fillable=['id_user','produto','preco'];

    public function relUsers(){
        return $this->hasOne('App\Models\User','id','id_user');
    }
}
