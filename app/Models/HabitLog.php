<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabitLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'habit_id',
        'completed_at'
    ];

    //um registro pertence a um habit
    public function habit(){
        return $this->belongsTo(Habit::class);
    }

    //um registro pertence a um usuario
    public function user(){
        return $this->belongsTo(User::class);
    }
}
