<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
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
        'building_id',
    ];

    /**
     * Get the building belongsto.
     */
    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    /**
     * Get the user belongsto.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
