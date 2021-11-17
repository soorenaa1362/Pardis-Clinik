<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BioSign extends Model
{
    use HasFactory;

    protected $table = "bio_signs";

    protected $fillable = [
        // 'profile_id',
        'patient_id',
        'bio',
        'heartdisease',
        'geneticdisease',
        'headache',
        'diabete',        
    ];


    const heartdiseaseTitle = [
        0 => ['id' => 0 , 'title' => 'ندارم'],
        1 => ['id' => 1 , 'title' => 'دارم' ],
    ];
    public function getHeartDiseaseTitle()
    {
        $status = self::heartdiseaseTitle;
        return $status[$this->heartdisease]['title'];
    }


    const geneticdiseaseTitle = [
        0 => ['id' => 0 , 'title' => 'ندارم'],
        1 => ['id' => 1 , 'title' => 'دارم' ],
    ];
    public function getGeneticDiseaseTitle()
    {
        $status = self::geneticdiseaseTitle;
        return $status[$this->geneticdisease]['title'];
    }


    const headacheTitle = [
        0 => ['id' => 0 , 'title' => 'ندارم'],
        1 => ['id' => 1 , 'title' => 'دارم' ],
    ];
    public function getHeadAcheTitle()
    {
        $status = self::headacheTitle;
        return $status[$this->headache]['title'];
    }


    const diabeteTitle = [
        0 => ['id' => 0 , 'title' => 'ندارم'],
        1 => ['id' => 1 , 'title' => 'دارم' ],
    ];
    public function getDiabeteTitle()
    {
        $status = self::diabeteTitle;
        return $status[$this->diabete]['title'];
    }




    public function Profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

}
