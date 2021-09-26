<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    //связь с задачами 1:many
    public function tasks(){
        return $this->hasMany(Task::class);
    }
    //связь с списком DeskList 
    public function desk_list(){
        return $this->belongsTo(DeskList::class);
    }
}
