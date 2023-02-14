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
        Schema::create('child_to_child_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('childName');
            $table->timestamps();
        });

        Schema::create('child_categories_child', function (Blueprint $table) {
            $table->unsignedInteger('child_id');
            $table->unsignedInteger('child_to_child_id');
            $table->foreign('child_id')->references('id')->on('child_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('child_to_child_id')->references('id')->on('child_to_child_categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_categories_child');
        Schema::dropIfExists('child_to_child_categories');
    }
};
