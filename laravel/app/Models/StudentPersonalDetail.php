<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentPersonalDetail extends Model
{
    protected $fillable = [
        'registration_no',
        'name',
        'dob',
        'phone_no',
        'department',
        'semester'
    ];

    public function studentAuth(): BelongsTo
    {
        return $this->belongsTo(StudentAuth::class, 'registration_no', 'registration_no');
    }
}
