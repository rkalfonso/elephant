<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id()->startingValue(1000123459);
            $table->integer('flag')->nullable();
            //$table->increments('card_number')->startingValue(1000123459);;
            $table->string('category')->nullable();
            $table->string('category_id')->nullable();

            //profile
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('id_presented')->nullable();
            $table->string('nationality')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('cellphone_number')->nullable();
            $table->string('occupation')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('email')->nullable();

            //address
            $table->string('street_number')->nullable();
            $table->string('street_name')->nullable();
            $table->string('barangay')->nullable();
            $table->string('municipality')->nullable();
            $table->string('zip_code')->nullable();

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
        Schema::dropIfExists('members');
    }
}
