<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifikasiTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikasi', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('np_user')->nullable();
            $table->string('np_nama')->nullable();
            $table->date('tgl_verif');
            $table->integer('jml_rim')->default(0);
            $table->integer('target')->default(30);
            $table->string('lembur')->default('-');
            $table->text('keterangan')->nullable();
            $table->timestamps();

            
            $table->foreign('np_user')
                    ->references('np')
                    ->on('accounts')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verifikasi');
    }
}
