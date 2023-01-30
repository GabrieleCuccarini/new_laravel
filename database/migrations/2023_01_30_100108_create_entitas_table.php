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
        Schema::create('entitas', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->longtext("content");
            $table->string("cover_img")->nullable();
            $table->boolean("public")->default(true);
            $table->string("status")->default("draft");
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
        Schema::dropIfExists('entitas');
    }
};
