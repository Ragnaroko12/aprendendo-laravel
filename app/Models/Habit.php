<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    use HasFactory;
    // serve para definir os campos que podem ser preenchidos
    protected $fillable = [
            'user_id',
            'name'
        ];
    //um habit pertence a um usuario
        public function user()
        {
            return $this->belongsTo(User::class);
        }

     //um habit tem muitos habit logs
        public function habitLogs()
        {
            return $this->hasMany(HabitLog::class);
        }
}
