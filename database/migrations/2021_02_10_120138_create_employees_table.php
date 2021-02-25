<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rotba');
            $table->string('degree');
            $table->string('name');
            $table->string('last_name');
            $table->string('father_name');
            $table->date('graduation_date');
            $table->string('university');
            $table->string('proficiency');
            $table->integer('tazkira_no');
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
            $table->string('email');
            $table->string('tel');
            $table->string('image');
            $table->tinyInteger('department_id')->unsigned()->index();
            $table->tinyInteger('committee_id')->unsigned()->index();
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
        Schema::dropIfExists('employees');
    }
}
