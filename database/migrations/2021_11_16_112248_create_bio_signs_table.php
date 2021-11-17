<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBioSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio_signs', function (Blueprint $table) {
            $table->id();
            // $table->string('profile_id');
            $table->string('patient_id');
            $table->text('bio');
            $table->integer('heartdisease')->nullable();
            $table->integer('geneticdisease')->nullable();            
            $table->integer('headache')->nullable();
            $table->integer('diabete')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bio_signs');
    }
}
