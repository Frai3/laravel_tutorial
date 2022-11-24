<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFotoPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Mengelola table BUKAN create
        Schema::table('pegawai', function (Blueprint $table) {
            // Install composer require doctrin/dbal
            $table->string('foto_profile')->nullable(); //Menambahkan field baru pada table
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
