<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'abbrv',
        'level',
        'principal',
        'user_id',
    ];

    /**
     * Get building under this school.
     */
    public function building()
    {
      return $this->hasMany(Building::class);
    }

    /**
     * Get the user belongsto.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
