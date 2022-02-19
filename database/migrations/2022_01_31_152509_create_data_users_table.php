<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_lengkap')->nullable();
            $table->string('nama_panggilan')->nullable();
            $table->string('nim')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->string('alamat')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('motto')->nullable();
            $table->string('pengalaman', 255)->nullable();
            $table->string('motivasi')->nullable();
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
        Schema::dropIfExists('users_data');
    }
}
