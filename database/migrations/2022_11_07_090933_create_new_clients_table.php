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
        Schema::create('new_clients', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Gender');
            $table->string('Date of Birth');
            $table->string('Email');
            $table->string('Address');
            $table->string('Phone');
            $table->string('Join Date');
            $table->string('Plan');
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
        Schema::dropIfExists('new_clients');
    }
};
