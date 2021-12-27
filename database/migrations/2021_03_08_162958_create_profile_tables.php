<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->integer('id');
            $table->string('foto')->default('default-avatar.png');
            $table->string('np_user')->nullable();
            $table->foreign('np_user')
                    ->references('np')
                    ->on('accounts')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->string('nama');
            $table->string('unit');
            $table->string('email');
            $table->text('alamat')->nullable();
            $table->string('contact')->nullable();
            $table->string('sub_bagian');
            $table->date('tgl_lahir');
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
        Schema::dropIfExists('profile');
    }
}
