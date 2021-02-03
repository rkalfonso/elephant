<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependents', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('member_id');
            $table->integer('flag');

            //profile
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('relationship_to_member');
            $table->string('occupation');
            $table->string('monthly_income');
            $table->string('phone_number');
            $table->string('cellphone_number');

            // $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('dependents');
    }
}
