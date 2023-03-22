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
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('dish_id');
         $table->foreignId('category_id');
         $table->string('dish_name');
         $table->longText('dish_detail');
         $table->text('dish_image');
         $table->integer('dish_status');
         $table->float('price', 10, 2)->nullable();
         $table->float('discount', 10, 2)->nullable();
         $table->dateTime('added_on');
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
        Schema::dropIfExists('menus');
    }
};
