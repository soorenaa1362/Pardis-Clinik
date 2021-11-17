<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = "patients";

    protected $fillable = [
        'profile_id',
        'fname',
        'lname',
        'nationalCode',
        'mobile',
        'age',
        'sex',
    ];


    public function Profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }
}
