<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testsales', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_no');
            $table->date('date');
            $table->integer('category_id');
            $table->integer('product_id');
            $table->integer('current_qty');
            $table->integer('buying_qty');
            $table->integer('remaining_qty');
            $table->integer('sellingprice');
            $table->integer('total');
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
        Schema::dropIfExists('testsales');
    }
}
