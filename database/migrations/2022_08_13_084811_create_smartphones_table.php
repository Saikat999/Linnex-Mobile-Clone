<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone_name');
            $table->string('code')->nullable();
            $table->string('quantity')->nullable();
            $table->string('android_version');
            $table->string('processor');
            $table->string('display');
            $table->string('storage');
            $table->string('camera');
            $table->string('battery');
            $table->string('phone_image');
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
        Schema::dropIfExists('smartphones');
    }
}
