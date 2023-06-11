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
        Schema::create('biodata_mentee', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('foto');
            $table->string('username');
            $table->tinyInteger('jenis_kelamin');
            $table->mediumText('tentang');
            $table->string('tempat_tinggal');
            $table->unsignedBigInteger('pekerjaan');
            $table->string('instansi');
            $table->string('telepon');
            $table->json('minat')->nullable();
            $table->string('portofolio');
            $table->json('calon_mentor')->nullable();
            $table->json('mentor')->nullable();
            $table->json('bookmark')->nullable();
            $table->mediumText('pemberitahuan')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata_mentee');
    }
};
