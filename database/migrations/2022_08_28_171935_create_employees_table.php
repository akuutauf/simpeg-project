<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('employee_type_id'); // employee
            $table->string('nip')->nullable(); // employee
            $table->string('nidn')->nullable(); // employee
            $table->string('name'); // personal
            $table->enum('gender', ['L', 'P']); // personal
            $table->string('phone')->nullable(); // personal
            $table->string('email')->nullable(); // personal
            $table->string('birthplace')->nullable(); // personal
            $table->date('birthdate')->nullable(); // personal
            $table->string('religion'); // personal
            $table->string('address'); // address
            $table->string('city'); // address
            $table->string('district'); // address
            $table->string('province'); // address
            $table->string('nationality'); // address
            $table->string('postal_code'); // address
            $table->string('back_degree')->nullable(); // personal
            $table->string('front_degree')->nullable(); // personal
            $table->timestamps();
            $table->foreign('employee_type_id')->references('id')->on('employee_types')->onDelete('restrict')->onUpdate('cascade');
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
};
