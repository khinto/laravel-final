<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{


      protected $fillable = [
      'body', 'user_id', 'product_id',
     ];



    public function productcom(){

        return $this->belongsTo('App\Product');
    }
}
