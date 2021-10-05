<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->string('productTamilName');
            $table->string('productCategory');
            $table->string('productDescription');
            $table->string('productPrice');
            $table->string('productOfferPrice');
            $table->string('productQuantity');
            $table->string('isUpdate')->nullable();
            $table->string('isDelete')->nullable();
            $table->string('CreatedBy')->nullable();
            $table->string('ModifiedBy')->nullable();
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
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
