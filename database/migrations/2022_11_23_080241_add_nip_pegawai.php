<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNipPegawai extends Migration
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
            $table->string('gelar')->nullable()->change(); //Untuk mengubah menjadi nullable
            $table->string('nip'); //Menambahkan field baru pada table
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
