<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
//use App\Models\PendingStudentDetail;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class StudentAuth extends Authenticatable
{

    protected $fillable = [
        'registration_no',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
    ];

    public function personalDetails(): HasOne
    {
        return $this->hasOne(PendingStudentDetail::class, 'registration_no', 'registration_no');
    }
    public function students(): HasOne
    {
        return $this->hasone(Student::class, 'registration_no', 'registration_no');
    }
}
