<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('school_id');
            $table->integer('user_id');
            $table->integer('admission_no');
            $table->date('admission_date');
            $table->integer('guardian_id');
            $table->char('relation_with', 50);
            $table->char('name', 100);
            $table->date('stnd_dob');
            $table->char('gender', 15);
            $table->char('religion', 15);
            $table->char('blood', 5);
            $table->char('nationality', 25);
            $table->char('stn_mobile', 20);
            $table->char('fa_name', 100);
            $table->char('fa_mobile', 20);
            $table->char('fa_profession', 100);
            $table->char('ma_name', 100);
            $table->char('ma_mobile', 20);
            $table->char('ma_profession', 100);
            $table->char('ma_profession', 100);
            $table->char('class', 20);
            $table->char('ma_profession', 20);
            $table->char('ma_profession', 20);
            $table->char('mother_photo', 20);
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
        Schema::dropIfExists('students');
    }
}
