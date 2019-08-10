<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body', 'slug'];
        public function user(){


        return $this->belongsTo(User::class);  
        }


        public function setTitleAttribute($value) 
        {
            $this->attribute['title']= $value;  
            $this->attribute['slug']= str_slug($value);  
    
        }

        public function getUrlAttribute() 
        
        {
            return route('questions.show', $this->id);


        }

        public function getCreatedDateAttribute() 
        
    {
        return $this->created_at->diffForHumans();


    }
    

}
