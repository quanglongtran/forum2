<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Comment extends Model
{
    use HasFactory;


    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function post(){
    	return $this->belongsTo(Post::class);
    }

    public function reply() {
        return $this->hasMany(Reply::class, 'comment_id', 'id');
    }

}