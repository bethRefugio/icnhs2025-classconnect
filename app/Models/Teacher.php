<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'user_id',
        'grade',
        'section',
        'school_id',
        'building_id',
        'classroom_id',
        'department_id',
        'email',
        'profile_pic',
        'position',
        'facebook',
        'twitter',
        'position',
        'instagram',
    ];

    /**
     * Get the user belongsto.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the building belongsto.
     */
    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    /**
     * Get the department belongsto.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get the department belongsto.
     */
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

}
