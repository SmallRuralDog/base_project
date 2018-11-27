<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('p_id')->default(0)->comment('上级ID');
            $table->string('app_id',64)->nullable();
            $table->string('open_id', 64)->unique()->comment('openID');
            $table->string('pa_open_id', 64)->nullable()->comment('支付 openID');
            $table->boolean('is_auth')->default(0);
            $table->string('avatar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
