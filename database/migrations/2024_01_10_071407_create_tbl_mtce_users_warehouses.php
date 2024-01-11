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
        Schema::create('tbl_mtce_users_warehouses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')
                    ->unsigned()
                    ->index()
                    ->nullable();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('tbl_mtce_user_hdr');
            $table->bigInteger('warehouse_id')
                    ->unsigned()
                    ->index()
                    ->nullable();
            $table->foreign('warehouse_id')         
                    ->references('id')
                    ->on('tbl_warehouse');
            $table->integer('status');
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
        Schema::dropIfExists('tbl_mtce_users_warehouses');
    }
};
