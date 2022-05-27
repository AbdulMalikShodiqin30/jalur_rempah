<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnTypeVideoKategoriShow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('video_kategori_show', function (Blueprint $table) {
            $table->unsignedBigInteger('id_video')->change();
            $table->unsignedBigInteger('id_kategori_show')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('video_kategori_show', function (Blueprint $table) {
            //
        });
    }
}
