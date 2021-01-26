<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationToWebinarPendaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('webinar_pendaftar', function (Blueprint $table) {
            $table->foreign('id_webinar')->references('id')->on('webinar_jadwals')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('webinar_pendaftar', function (Blueprint $table) {
            $table->dropForeign('id_webinar');
            $table->dropForeign('id_user');
        });
    }
}
