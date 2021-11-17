<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "profiles";

    const mainIdTitle = [
        1   => [   'id'    =>  1     ,   'title'   =>  'خودم'  ],
        2   => [   'id'    =>  2     ,   'title'   =>  'همسر'  ],
        3   => [   'id'    =>  3     ,   'title'   =>  'فرزند' ],
        4   => [   'id'    =>  4     ,   'title'   =>  'پدر'   ],
        5   => [   'id'    =>  5     ,   'title'   =>  'مادر'  ],
        6   => [   'id'    =>  6     ,   'title'   =>  'برادر' ],
        7   => [   'id'    =>  7     ,   'title'   =>  'خواهر' ],
        8   => [   'id'    =>  8     ,   'title'   =>  'غیره'  ],
    ];


    const marriedTitle = [
        0 => ['id' => 0 , 'title' => 'مجرد'],
        1 => ['id' => 1 , 'title' => 'متاهل'],
    ];


    public function getMainIdTitle()
    {
        $status = self::mainIdTitle;
        return $status[$this->mainId]['title'];
    }


    public function getMarriedTitle()
    {
        $status = self::marriedTitle;
        return $status[$this->married]['title'];
    }


    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'mobile',
        'nationalCode',        
        'married',
        'mainId',
        'age',
    ];





    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



}
