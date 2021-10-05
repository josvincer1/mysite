<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderID');
            $table->string('orderProductName');
            $table->string('orderQuantity');
            $table->string('orderTotal');
            $table->string('orderFirstName');
            $table->string('orderSecondName');
            $table->string('orderAddress');
            $table->string('orderCity');
            $table->string('orderState');
            $table->string('orderZip');
            $table->string('orderEmail');
            $table->string('orderPhoneNumber');
            $table->string('orderStatus');
            $table->string('isPaid')->nullable();
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
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}
