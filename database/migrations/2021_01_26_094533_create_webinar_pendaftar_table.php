<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarPendaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinar_pendaftar', function (Blueprint $table) {
            $table->bigIncrements('id_pendaftar');
            $table->foreignId('id_webinar');
            $table->foreignId('id_user');
            $table->date('created_at');
            $table->date('edited_at')->nullable();
            $table->boolean('status_hadir');
            $table->boolean('is_boleh_unduh_sertifikat');
            $table->date('tanggal_unduh_sertifikat')->nullable();	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webinar_pendaftar');
    }
}
