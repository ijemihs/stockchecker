<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('store_id');
            $table->string('outer_item_id');
            $table->text('name');
            $table->text('item_url');
            $table->text('image_url');
            $table->unsignedMediumInteger('stock');
            $table->timestamp('outer_created_at', 0);
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
            
            // ユニーク制約
            $table->unique(['store_id', 'outer_item_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
