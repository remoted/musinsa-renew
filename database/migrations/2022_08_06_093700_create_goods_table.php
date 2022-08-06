<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id(); // 상품번호
            $table->string('name')->nullable(); //상품명
            $table->string('comment')->nullable();  //상품설명
            $table->integer('customer_id');   // 업체 아이디
            $table->dateTime('registed_date')->nullable();  //상품정보 최초등록일시
            $table->dateTime('update_date')->nullable();  //상품정보 최종수정일시
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
        Schema::dropIfExists('goods');
    }
}
