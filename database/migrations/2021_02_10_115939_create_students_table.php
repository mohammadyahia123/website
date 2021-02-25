<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('name');
            $table->string('father_name');
            $table->string('last_name');
            $table->string('grand_father_name');
            $table->string('mother_tongue');
            $table->string('hobby')->nullable();
            $table->integer('tazkira_no')->unique();
            $table->string('tazkira_jold');
            $table->string('tazkira_safha');
            $table->integer('tazkira_registration_no');
            $table->date('date_of_birth');
            $table->boolean('civic_state');
            $table->string('original_province');
            $table->string('original_suburb');
            $table->string('original_district');
            $table->string('present_settlement_province');
            $table->string('present_settlement_suburb');
            $table->string('present_settlement_district');
            $table->date('school_graduation_date');
            $table->string('school_name');
            $table->date('kankor_year');
            $table->decimal('kankor_result_number');
            $table->string('kankor_id')->unique();
            $table->string('tel')->nullable()->unique();
            $table->string('father_work_and_workplace')->nullable();
            $table->string('father_tel')->nullable()->unique();
            $table->string('brother_reputation')->nullable();
            $table->string('brother_work_and_workplace')->nullable();
            $table->string('brother_tel')->nullable()->unique();
            $table->string('kaka_reputation')->nullable();
            $table->string('kaka_work_and_workplace')->nullable();
            $table->string('kaka_tel')->nullable()->unique();
            $table->string('mama_reputation')->nullable();
            $table->string('mama_work_and_workplace')->nullable();
            $table->string('mama_tel')->nullable()->unique();
            $table->string('image');
            $table->tinyInteger('department_id')->unsigned()->index();
            $table->tinyInteger('committee_id')->unsigned()->index();
            $table->string('email')->nullable();
            $table->timestamps();
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('committee_id')->references('id')->on('committees')->onUpdate('cascade')->onDelete('cascade');
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
