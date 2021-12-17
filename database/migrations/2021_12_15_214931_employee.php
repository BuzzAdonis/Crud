<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EMPLOYEE', function (Blueprint $table) {
            $table->increments('EmployeeId');
            $table->string('EmployeeName', 25);
            $table->string('EmployeeLastname', 25);
            $table->unsignedInteger('DepartmenId');
            $table->unsignedInteger('StudyId');
            $table->foreign('DepartmenId')->references('DepartmenId')->on('deparment');
            $table->foreign('StudyId')->references('StudyId')->on('study');
            $table->boolean('Sexo')->default(1);
            $table->string('Idnumber',14);
            $table->string('Address', 200);
            $table->string('HomePhone',12);
            $table->string('MobilePhone',12);
            $table->decimal('BaseSalary', 12,2);
            $table->decimal('Disconunt', 12,2);
            $table->decimal('NetSalary', 12,2);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EMPLOYEE');
    }
}
