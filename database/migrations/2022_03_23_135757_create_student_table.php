<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->integer('aday_no');
            $table->integer('kimlik_no');
            $table->string('ad', 50);
            $table->string('soyad', 50);
            $table->string('baba_adi', 50);
            $table->string('dogum_yeri', 50);
            $table->date('dogum_tarihi');
            $table->string('uyruk', 50);
            $table->string('sinav_ili', 50);
            $table->string('universite', 50);
            $table->string('fakulte', 50);
            $table->string('sinif', 20);
            $table->integer('sira');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
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
        Schema::dropIfExists('student');
    }
}
