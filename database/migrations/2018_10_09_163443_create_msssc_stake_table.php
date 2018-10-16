<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMssscStakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msssc_stake', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('phase_num')->comment('期数');
            $table->integer('user_id')->comment('用户');
            $table->integer('type')->comment('押注类型');
            $table->integer('number')->comment('押注数量');
            $table->integer('result')->comment('最终结果');
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
        Schema::dropIfExists('msssc_stake');
    }
}
