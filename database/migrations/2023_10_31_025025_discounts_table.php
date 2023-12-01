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
        //
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->double('amout');
            $table->tinyInteger('type'); // 1- trừ trực tiếp giá sp, 2- giảm giá theo phần trăm sản phẩm
            $table->softDeletes();
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
        //
    }
};
