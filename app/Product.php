<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['name','description','price','cover_img'];

    public function categories() {
    	return $this->belongsToMany('App\Categories', 'product_categories', 'product_id');
    }




    public function comment(){

        return $this->hasMany('App\Comment');
    }


    public function addComment($body){

        $this->comment()->create(compact('body'));




    }






}









