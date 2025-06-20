<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'contact_no',
        'LRN',
        'year_level',
        'adviser_id',
        'room_id',
        'parent',
        'profile_pic',      
        
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
     * Get the adviser(teacher) belongsto.
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'adviser_id');
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
