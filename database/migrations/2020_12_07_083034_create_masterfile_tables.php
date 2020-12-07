<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterfileTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterfile_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('npwp', 15)->unique();
            $table->string('name');
            $table->string('kelurahan');
            $table->string('nip_ar');
            $table->string('nama_ar');
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
        Schema::dropIfExists('masterfile_tables');
    }
}
