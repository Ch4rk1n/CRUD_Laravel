<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['id_user', 'produto', 'preco'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
