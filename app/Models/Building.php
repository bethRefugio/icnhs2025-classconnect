<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user_id',
        'school_id',
    ];

    /**
     * Get classroom under this building.
     */
    public function classroom()
    {
      return $this->hasMany(Classroom::class);
    }

    /**
     * Get the user belongsto.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the school belongsto.
     */
    public function school()
    {
        return $this->belongsTo(School::class);
    }

}
