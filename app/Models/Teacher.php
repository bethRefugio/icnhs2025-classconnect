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
        'name',
        'email',
        'contact_no',
        'vacant_time',
        'vacant_day',
        'profile_pic',
        'user_id',
        'department_id',
        'room_id',
        
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
        return $this->belongsTo(Department::class, 'department_id');
    }

    /**
     * Get the department belongsto.
     */
    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'room_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
