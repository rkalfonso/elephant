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
            $table->id();
            // $table->unsignedBigInteger('user_id');
            $table->string('employee_number')->nullable();
            $table->string('department')->nullable();
            $table->integer('flag')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('cellphone_number')->nullable();
            $table->string('address')->nullable();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
