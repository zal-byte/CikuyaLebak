<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCikuyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cikuyas', function (Blueprint $table) {
            $table->id();
            $table->string("judul")->nullable();
            $table->string("kategori")->nullable();
            $table->date("tanggal")->nullable();
            $table->text("konten")->nullable();
            $table->text("gambar")->nullable();
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
        Schema::dropIfExists('cikuyas');
    }
}
