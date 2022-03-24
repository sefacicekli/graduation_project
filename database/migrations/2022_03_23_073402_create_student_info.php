<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_info', function (Blueprint $table) {
            $table->id();
            $table->integer('aday_no')->unsigned()->unique();
            $table->bigInteger('kimlik_no', )->unsigned()->unique();
            $table->string('ad', 50);
            $table->string('soyad', 50);
            $table->string('baba_adi', 50);
            $table->string('dogum_yeri', 50);
            $table->date('dogum_tarihi');
            $table->string('uyruk', 50);

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
        Schema::dropIfExists('student_info');
    }
}
