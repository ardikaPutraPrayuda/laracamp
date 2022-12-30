<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolfeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolfees', function (Blueprint $table) {
            $table->id();
            $table->string('jenjang_sekolah', 100)->nullable();
            $table->string('judul', 100)->nullable();
            $table->string('slug', 100)->nullable();
            $table->integer('biaya')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schoolfees');
    }
}
