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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('progress')->nullable();
            $table->enum('role', ['admin', 'user'])->nullable()->default('user');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->integer('nisn')->nullable();
            $table->enum('jk', ['laki_laki', 'perempuan'])->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('nohp', 255)->nullable();
            $table->string('nohp_ayah', 255)->nullable();
            $table->string('nohp_ibu', 255)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
